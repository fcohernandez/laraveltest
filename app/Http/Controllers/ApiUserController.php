<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class ApiUserController extends Controller
{
    public function getAllUsers() {
        $users = User::all();

        return response($users, 200);
      }
  
    public function createUser(Request $request) {

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
       
        return response()->json([
            "mensaje" => "usuario creado con éxito!!"
        ], 201);    
        
    }
  
    public function getUser($id) {
        $user = User::findOrFail($id);
        return response($user, 200);
    }
  
    public function updateUser(Request $request, $id) {
        $user = User::findOrFail($id);

        $user->name = is_null($request->name) ? $user->name : $request->name;
        $user->email = is_null($request->email) ? $user->email : $request->email;

        $user->save();

        return response()->json([
            "mensaje" => "usuario actualizado correctamente!!"
        ], 200);

    }
  
    public function deleteUser ($id) {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json([
            "mensaje" => "usuario eliminado correctamente!!"
        ], 200);
    }
}
