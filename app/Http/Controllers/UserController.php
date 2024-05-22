<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //listAllUsers ou list_all_users
    public function listAllUsers() {
        // Lógica
        return view('users.listAllUsers');
    }

    public function listUserById() {
        return view('users.listUserById');
    }

    public function createUser() {
        return view('users.createUser');
    }

    public function editUser() {
        return view('users.editUser');
    }

    public function deleteUser() {
        return view('users.deleteUser');
    }
}
