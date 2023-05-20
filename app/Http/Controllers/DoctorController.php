<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{


    public function index(Request $request)
    {

        $search = $request->input('search');
        if ($search) {
            $medicos = User::doctors()
                ->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('lastname', 'LIKE', '%' . $search . '%')
                        ->orWhere('phone', 'LIKE', '%' . $search . '%')
                        ->orWhere('location', 'LIKE', '%' . $search . '%')
                        ->orWhere('email', 'LIKE', '%' . $search . '%');
                })
                ->paginate(10);
        } else {
            $medicos = User::doctors()->paginate(10);
        }
        return view('medicos.index', compact('medicos'));
    }


    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'phone' => 'required|digits:9',
            'location' => 'nullable|min:3',
            'email' => 'required|email'
        ];
        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe tener más de 3 caracteres',
            'lastname.required' => 'Los apellidos del médico es obligatorio',
            'lastname.min' => 'Los apellidos del médico debe tener más de 3 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingresa una direccion de correo electrónico válido',
            'phone.required' => 'El número de teléfono es obligatorio',
            'phone.digits' => 'El número debe tener 9 caracteres',
            'location.min' => 'La direccion debe tener al menos 3 caracteres'

        ];
        $this->validate($request, $rules, $messages);

        User::create(
            $request->only('name', 'lastname', 'phone', 'location', 'email','email_verified_at')
                + [
                    'role' => 'Medico',
                    'password' => bcrypt($request->input('password'))
                ]
        );
        $notification = 'El medico se ha registrado correctamente';
        return redirect(('/medicos'))->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)


    {
        $doctor = User::doctors()->findOrFail($id);

        return view('/medicos.edit', compact('doctor'));
    }


    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'phone' => 'required|digits:9',
            'location' => 'nullable|min:3',
            'email' => 'required|email'
        ];
        $messages = [
            'name.required' => 'El nombre del médico es obligatorio',
            'name.min' => 'El nombre del médico debe tener más de 3 caracteres',
            'lastname.required' => 'Los apellidos del médico es obligatorio',
            'lastname.min' => 'Los apellidos del médico debe tener más de 3 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Ingresa una direccion de correo electrónico válido',
            'phone.required' => 'El número de teléfono es obligatorio',
            'phone.digits' => 'El número debe tener 9 caracteres',
            'location.min' => 'La direccion debe tener al menos 3 caracteres'

        ];
        $this->validate($request, $rules, $messages);
        $user = User::doctors()->findOrFail($id);

        $data =  $request->only('name', 'lastname', 'phone', 'location', 'email','email_verified_at');
        $password = $request->input('password');

        if ($password)
            $data['password'] = bcrypt($password);

        $user->fill($data);
        $user->save();

        $notification = 'La informacion se actualizo correctamente';
        return redirect(('/medicos'))->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::doctors()->findOrFail($id);
        $doctorName = $user->name;
        $user->delete();

        $notification = "El médico $doctorName ha sido eliminado correctamente";

        return redirect('/medicos')->with(compact('notification'));
    }
}
