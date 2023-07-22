<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(){
$user =auth()->user();

        return view('profile',compact('user'));
    }


    public function update(Request $request)
{
    $user = auth()->user();
    $user->name = $request->name;
    $user->lastname = $request->lastname;
    $user->phone = $request->phone;
    $user->location = $request->location;

    // Verificar si se proporcionó una nueva contraseña
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    $notification = 'Los datos del perfil se han actualizado correctamente';
    return back()->with(compact('notification'));
    }
}
