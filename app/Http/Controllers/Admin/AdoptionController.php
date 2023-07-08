<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

class AdoptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $pets = Adoption::where('especie', 'LIKE', '%' . $search . '%')
                ->orWhere('raza', 'LIKE', '%' . $search . '%')
                ->orWhere('edad', 'LIKE', '%' . $search . '%')
                ->orWhere('tamanio', 'LIKE', '%' . $search . '%')

                ->paginate(10);
        } else {
            $pets = Adoption::paginate(10);
        }
        return view('adoption.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adoption.create');
    }

    public function store(Request $request)
         {
             $request->validate([
                 'especie' => 'required',
                 'tamanio' => 'required',
                 'edad' => 'required|integer',
                 'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             ]);

             $adoption = new Adoption();
             $adoption->especie = $request->especie;
             $adoption->raza = $request->raza;
             $adoption->tamanio = $request->tamanio;
             $adoption->edad = $request->edad;

             if ($request->hasFile('imagen')) {
                 $imagePath = $request->file('imagen')->store('public/images');
                 $adoption->imagen = $imagePath;
             }

             $adoption->save();

             return redirect()->route('adoptions.index')->with('success', 'Adoption created successfully');
         }

    public function sendData(Request $request)
    {
        $rules = [
            'especie' => 'required|min:3',
            'raza' => 'required|min:3',
            'edad' => 'required|numeric',

            'tamanio' => 'required|min:3',

        ];

        $messages = [
            // Mensajes de validación...
        ];

        $this->validate($request, $rules, $messages);

        $user = Auth::user(); // Obtener el usuario autenticado

        $pet = new Adoption();
        $pet->especie = $request->input('especie');
        $pet->raza = $request->input('raza');
        $pet->edad = $request->input('edad');
        $pet->tamanio = $request->input('tamanio'); // Asignar el id_user del usuario autenticado
        $pet->save();

        $notification = 'La mascota se ha registrado correctamente';
        return redirect(('/adoption'))->with(compact('notification'));
    }

    public function edit(Adoption $pet)
    {

        return view('/adoption.edit', compact('pet'));
    }



    public function update(Request $request, Adoption $pet)
    {
        $rules = [

            'especie' => 'required|min:3',
            'raza' => 'required|min:3',
            'edad' => 'required|numeric',
            'tamanio' => 'required|min:3',


        ];
        $messages = [

            'especie.required' => 'La especie de la mascota es obligatorio',
            'especie.min' => 'La especie de la mascota debe tener más de 3 caracteres',
            'raza.required' => 'La raza de la mascota es obligatorio',
            'raza.min' => 'La raza de la mascota debe tener más de 3 caracteres',
            'edad.required' => 'La edad de la mascota es obligatorio',
            'edad.numeric' => 'Debe ingresar solo numero [0-9]',
            'tamanio.required' => 'El tamaño de la mascota es obligatorio',
            'tamanio.min' => 'El tamaño de la mascota debe tener más de 3 caracteres',



        ];
        $this->validate($request, $rules, $messages);
        $user = Auth::user();
        $pet->especie = $request->input('especie');
        $pet->raza = $request->input('raza');
        $pet->edad = $request->input('edad');
        $pet->tamanio = $request->input('tamanio');
        $pet->save();

        $notification = 'La mascota se ha actualizado correctamente';
        return redirect(('/adoption'))->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $pet)
    {
        $deleteName = $pet->raza;
        $pet->delete();
        $notification = 'La Mascota ' . $deleteName . ' se ha eliminado correctamente';

        return redirect('/adoption')->with(compact('notification'));
    }
}
