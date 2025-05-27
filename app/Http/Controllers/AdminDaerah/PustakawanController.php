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

}
