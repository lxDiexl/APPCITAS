<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;


class PacientesController extends Controller
{
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function index(Request $request)
    {

        $search = $request->input('search');
        if ($search) {
            $clientes = User::patients()
                ->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('lastname', 'LIKE', '%' . $search . '%')
                        ->orWhere('phone', 'LIKE', '%' . $search . '%')
                        ->orWhere('location', 'LIKE', '%' . $search . '%')
                        ->orWhere('email', 'LIKE', '%' . $search . '%');
                })
                ->paginate(10);
        } else {
            $clientes = User::patients()->paginate(10);
        }
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required|min:3',
            'lastname'=>'required|min:3',
            'phone'=> 'required|digits:9',
            'location'=>'nullable|min:3',
            'email'=>'required|email'
    ];
    $messages=[
        'name.required'=>'El nombre del cliente es obligatorio',
        'name.min'=>'El nombre del cliente debe tener más de 3 caracteres',
        'lastname.required'=>'Los apellidos del cliente es obligatorio',
        'lastname.min'=>'Los apellidos del cliente debe tener más de 3 caracteres',
        'email.required'=> 'El correo electrónico es obligatorio',
        'email.email'=>'Ingresa una direccion de correo electrónico válido',
        'phone.required'=> 'El número de teléfono es obligatorio',
        'phone.digits'=>'El número debe tener 9 caracteres',
        'location.min'=>'La direccion debe tener al menos 3 caracteres'

    ];
    $this->validate($request, $rules ,$messages);

    User::create(
        $request->only('name','lastname','phone','location','email','email_verified_at')
        +[
            'role'=>'Cliente',
            'password'=> bcrypt($request->input('password'))
        ]
    );
    $notification='El cliente se ha registrado correctamente';
    return redirect(('/clientes'))->with (compact('notification'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes=User::patients()->findOrFail($id);

        return view('/clientes.edit',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules =[
            'name'=> 'required|min:3',
            'lastname'=>'required|min:3',
            'phone'=> 'required|digits:9',
            'location'=>'nullable|min:3',
            'email'=>'required|email'
    ];
    $messages=[
        'name.required'=>'El nombre del cliente es obligatorio',
        'name.min'=>'El nombre del cliente debe tener más de 3 caracteres',
        'lastname.required'=>'Los apellidos del cliente es obligatorio',
        'lastname.min'=>'Los apellidos del cliente debe tener más de 3 caracteres',
        'email.required'=> 'El correo electrónico es obligatorio',
        'email.email'=>'Ingresa una direccion de correo electrónico válido',
        'phone.required'=> 'El número de teléfono es obligatorio',
        'phone.digits'=>'El número debe tener 9 caracteres',
        'location.min'=>'La direccion debe tener al menos 3 caracteres'

    ];
    $this->validate($request, $rules ,$messages);
    $user=User::Patients()->findOrFail($id);

    $data=  $request->only('name','lastname','phone','location','email','email_verified_at');
    $password=$request->input('password');

    if($password)
    $data['password']=bcrypt($password);

    $user->fill($data);
    $user->save();

    $notification='La informacion del cliente se actualizo correctamente';
    return redirect(('/clientes'))->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::patients()->findOrFail($id);
        $clienteName = $user->name;
        $user->delete();

        $notification="El cliente $clienteName ha sido eliminado correctamente";

        return redirect('/cliente')->with(compact('notification'));
    }
}
