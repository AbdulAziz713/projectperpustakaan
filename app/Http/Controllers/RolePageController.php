<?php

// app/Http/Controllers/RolePageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolePageController extends Controller
{
    public function admin() {
        return view('roles.admin_daerah');
    }

    public function petugas() {
        return view('roles.admin_desa');
    }

    public function anggota() {
        return view('roles.pustakawan');
    }
}
