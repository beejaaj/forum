<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facades\Validator;
use App\Models\User;

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

    public function registerUser(Request $request) {
        if ($request->method() === 'GET'){
        return view('users.register.registerUser');
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                ]);

            Auth::login($user);

            return redirect()->route('ListAllUsers')->with('success', 'Registro realizado com sucesso');
        }
    }

    public function editUser() {
        return view('users.id.edit.editUser');
    }

    public function deleteUser() {
        return view('users.id.delete.deleteUser');
    }
}
