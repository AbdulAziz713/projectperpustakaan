<?php

namespace App\Http\Controllers\AdminDaerah;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $pustakawans = User::where('role', 'anggota')->latest()->paginate(10);
        return view('admin_daerah.pustakawans.index', compact('pustakawans'));
    }

    public function verify(User $pustakawan)
    {
        $pustakawan->update(['email_verified_at' => now()]);
        return back()->with('success', 'Pustakawan berhasil diverifikasi.');
    }

    public function destroy(User $pustakawan)
    {
        $pustakawan->delete();
        return back()->with('success', 'Anggota berhasil dihapus.');
    }

    public function create()
{
    return view('admin_daerah.pustakawans.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'role' => 'anggota', // PENTING! Supaya masuk filter di index()
    ]);

    return redirect()->route('admin_daerah.pustakawans.index')
        ->with('success', 'Pustakawan berhasil ditambahkan.');
}

public function edit(User $pustakawan)
{
    return view('admin_daerah.pustakawans.edit', compact('pustakawan'));
}

public function update(Request $request, User $pustakawan)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $pustakawan->id,
        'password' => 'nullable|string|min:6|confirmed',
    ]);

    $data = $request->only('name', 'email');
    if ($request->password) {
        $data['password'] = bcrypt($request->password);
    }

    $pustakawan->update($data);

    return redirect()->route('admin_daerah.pustakawans.index')->with('success', 'Pustakawan berhasil diperbarui.');
}

}
