<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //listAllUsers ou list_all_users
    public function listAllUsers(Request $request) {
        // Lógica
        return view('users.listAllUsers');
    }

    public function listUser(Request $request, $uid) {
        print($uid);
        //return view('users.id.listUser');
    }

    public function createUser() {
        return view('users.create.createUser');
    }

    public function editUser() {
        return view('users.id.edit.editUser');
    }

    public function deleteUser() {
        return view('users.id.delete.deleteUser');
    }
}
