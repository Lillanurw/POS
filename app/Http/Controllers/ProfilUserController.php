<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilUserController extends Controller
{
    public function show($id, $name) {
        return view('users.profile')
                    ->with('id', $id)
                    ->with('name', $name);
    }
}