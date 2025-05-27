<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->paginate(10);
        return view('admin_desa.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin_desa.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'status' => 'required',
        ]);

        Member::create($request->all());

        return redirect()->route('admin_desa.members.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit(Member $member)
    {
        return view('admin_desa.members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'status' => 'required',
        ]);

        $member->update($request->all());

        return redirect()->route('admin_desa.members.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin_desa.members.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
