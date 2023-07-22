<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    //https://developer.mozilla.org/es/docs/Web/HTTP/Status/302

    public function test_register()
    {

        Artisan::call('migrate');
        //formulario carga
        $carga = $this->get(route('register'));
        $carga->assertStatus(200)->assertSee('Registrarse');

        //registro incorrecto

        $registroMal = $this->post(route('register'), ["email" => "wasd", "password" => "123"]);
        $registroMal->assertStatus(302)->assertRedirect(route('register'));

        //registro correcto
            $registrobien = $this->post(route('register'), [
                "name" => "Diego",
                "lastname" => "Tasayco",
                "phone" => "987654321",
                "location" => "SJL",
                "email" => "dita@gmail.com",
                "password" => "diego",
                "password_confirmation" => "diego"
                ]);
            $registrobien->assertStatus(302)->assertRedirect(route('home'));
            $this->assertDatabaseHas('users', ['email' => "dita@gmail.com"]);


    }

    public function test_login()
    {

        Artisan::call('migrate');

        //cargar usuario
        // User::create([
        //     "name"=>"Willy",
        //     "lastname" => "Chavez",
        //     "phone" => "987741852",
        //     "location" => "SJL",
        //     "role"=>"Cliente",
        //     "email" => "will@gmail.com",
        //     "password" => Hash::make("will1212")]);

        //formulario de carga
        $carga = $this->get(route('login'));
        $carga->assertStatus(200)->assertSee('Iniciar Sesion');

        //Intengo de acceso no autorizado
        $accesomal = $this->get(route('home'));
        $accesomal->assertStatus(302)->assertRedirect(route('login'));

        //error de credenciales
        // $credencialesMal=$this->post(route('login'),["email"=>"Test@gmail.com","password"=>"No es"]);
        // $credencialesMal->assertStatus(302)->assertRedirect(route('login'))-> assertSessionHasErrors(['email'=>
        // "Las credenciales introducidas no son correctas"]);

        //login correcto
        $loginbien = $this->post(route('login'), ["email" => "Admi@gmail.com", "password" => "diego1212"]);
        $loginbien->assertStatus(302)->assertRedirect(route('home'));

        $this->assertDatabaseHas('users', ['email' => "Admi@gmail.com"]);
    }


}
