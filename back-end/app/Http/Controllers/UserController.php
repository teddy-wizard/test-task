<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller {


    public function getUsers()
    {
        $users  = User::all();
        return response()->json($users);
    }

    public function getUser($id)
    {
        $user  = User::find($id);
        return response()->json($user);
    }

    public function saveUser(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $user  = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->profile_picture = $request->input('profile_picture');

        $user->save();
        return response()->json($user);
    }

}
