<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Pets;
use App\Models\User;
use App\Http\Controllers\Controller;

class PetsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $pets = Pets::where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('especie', 'LIKE', '%' . $search . '%')
                ->orWhere('raza', 'LIKE', '%' . $search . '%')
                ->orWhere('edad', 'LIKE', '%' . $search . '%')
                ->orWhere('genero', 'LIKE', '%' . $search . '%')
                ->orWhere('tamaño', 'LIKE', '%' . $search . '%')
                ->orWhere('peso', 'LIKE', '%' . $search . '%')
                ->orWhere('id_user', 'LIKE', '%' . $search . '%')

                ->paginate(10);
        } else {
            $pets = Pets::paginate(10);
        }
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sendData(Request $request)
    {

        $rules = [
            'name' => 'required|min:3',
            'especie' => 'required|min:3',
            'raza' => 'required|min:3',
            'edad' => 'required|numeric',
            'genero' => 'required|min:3',
            'tamaño' => 'required|min:3',
            'peso' => 'required|numeric',
            'id_user' => 'required|numeric',

        ];
        $messages = [
            'name.required' => 'El nombre de la mascota es obligatorio',
            'name.min' => 'El nombre de la mascota debe tener más de 3 caracteres',
            'especie.required' => 'La especie de la mascota es obligatorio',
            'especie.min' => 'La especie de la mascota debe tener más de 3 caracteres',
            'raza.required' => 'La raza de la mascota es obligatorio',
            'raza.min' => 'La raza de la mascota debe tener más de 3 caracteres',
            'edad.required' => 'La edad de la mascota es obligatorio',
            'edad.numeric' => 'Debe ingresar solo numero [0-9]',
            'genero.required' => 'El género de la mascota es obligatorio',
            'genero.min' => 'El género de la mascota debe tener más de 3 caracteres',
            'tamaño.required' => 'El tamaño de la mascota es obligatorio',
            'tamaño.min' => 'El tamaño de la mascota debe tener más de 3 caracteres',
            'peso.required' => 'El peso de la mascota es obligatorio',
            'peso.numeric' => 'Debe ingresar solo numero [0-9]',
            'id_user.required' => 'El nombre del propietario es obligatorio',
            'id_user.numeric' => 'Debe ingresar solo numero [0-9]'


        ];
        $this->validate($request, $rules, $messages);

        $pet = new Pets();
        $pet->name = $request->input('name');
        $pet->especie = $request->input('especie');
        $pet->raza = $request->input('raza');
        $pet->edad = $request->input('edad');
        $pet->genero = $request->input('genero');
        $pet->tamaño = $request->input('tamaño');
        $pet->peso = $request->input('peso');
        $pet->id_user = $request->input('id_user');
        $pet->save();

        $notification = 'La mascota se ha registrado correctamente';
        return redirect(('/pets'))->with(compact('notification'));
    }

    public function edit(Pets $pet)
    {

        return view('/pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pets $pet)
    {
        $rules = [
            'name' => 'required|min:3',
            'especie' => 'required|min:3',
            'raza' => 'required|min:3',
            'edad' => 'required|numeric',
            'genero' => 'required|min:3',
            'tamaño' => 'required|min:3',
            'peso' => 'required|numeric',
            'id_user' => 'required|numeric',

        ];
        $messages = [
            'name.required' => 'El nombre de la mascota es obligatorio',
            'name.min' => 'El nombre de la mascota debe tener más de 3 caracteres',
            'especie.required' => 'La especie de la mascota es obligatorio',
            'especie.min' => 'La especie de la mascota debe tener más de 3 caracteres',
            'raza.required' => 'La raza de la mascota es obligatorio',
            'raza.min' => 'La raza de la mascota debe tener más de 3 caracteres',
            'edad.required' => 'La edad de la mascota es obligatorio',
            'edad.numeric' => 'Debe ingresar solo numero [0-9]',
            'genero.required' => 'El género de la mascota es obligatorio',
            'genero.min' => 'El género de la mascota debe tener más de 3 caracteres',
            'tamaño.required' => 'El tamaño de la mascota es obligatorio',
            'tamaño.min' => 'El tamaño de la mascota debe tener más de 3 caracteres',
            'peso.required' => 'El peso de la mascota es obligatorio',
            'peso.numeric' => 'Debe ingresar solo numero [0-9]',
            'id_user.required' => 'El nombre del médico es obligatorio',
            'id_user.numeric' => 'Debe ingresar solo numero [0-9]'


        ];
        $this->validate($request, $rules, $messages);

        $pet->name = $request->input('name');
        $pet->especie = $request->input('especie');
        $pet->raza = $request->input('raza');
        $pet->edad = $request->input('edad');
        $pet->genero = $request->input('genero');
        $pet->tamaño = $request->input('tamaño');
        $pet->peso = $request->input('peso');
        $pet->id_user = $request->input('id_user');
        $pet->save();

        $notification = 'La mascota se ha actualizado correctamente';
        return redirect(('/pets'))->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pets $pet)
    {
        $deleteName = $pet->name;
        $pet->delete();
        $notification = 'La Mascota ' . $deleteName . ' se ha eliminado correctamente';

        return redirect('/pets')->with(compact('notification'));
    }
}
