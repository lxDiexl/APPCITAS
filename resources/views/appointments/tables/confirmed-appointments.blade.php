<style>

    #shadow__btn {
        padding: 10px 20px;
        border: none;
        font-size: 17px;
        color: #fff;
        border-radius: 7px;
        letter-spacing: 4px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.5s;
        transition-property: box-shadow;
    }

    #shadow__btn {
        background: rgb(117, 229, 199);
        box-shadow: 0 0 25px rgb(117, 229, 199);
    }

    #shadow__btn:hover {
        box-shadow: 0 0 5px rgb(117, 229, 199),
            0 0 25px rgb(117, 229, 199),
            0 0 50px rgb(117, 229, 199),
            0 0 100px rgb(117, 229, 199);
    }

    #shadow__btn2 {
        padding: 10px 20px;
        border: none;
        font-size: 17px;
        color: #fff;
        border-radius: 7px;
        letter-spacing: 4px;
        font-weight: 700;
        text-transform: uppercase;
        transition: 0.5s;
        transition-property: box-shadow;
    }

    #shadow__btn2 {
        background: rgb(191, 42, 42);
        box-shadow: 0 0 25px rgb(191, 42, 42);
    }

    #shadow__btn2:hover {
        box-shadow: 0 0 5px rgb(191, 42, 42),
            0 0 25px rgb(191, 42, 42),
            0 0 50px rgb(191, 42, 42),
            0 0 100px rgb(191, 42, 42);
    }
</style>
<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th class="text-uppercase text-secondary text-center text-sm text-xxs font-weight-bolder  ">ID</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Descripción</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Especialidad</th>
                @if ($role == 'Cliente')
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Veterinario</th>
                @elseif($role == 'Medico')
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">Cliente</th>
                @endif
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fecha</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hora</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tipo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Estado</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($confirmedAppointments as $cita)
                <tr>
                    <td class="align-middle text-center text-sm" scope="row">
                        {{ $cita->id }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->description }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->specialty->name }}
                    </td>
                    @if ($role == 'Cliente')
                        <td scope="row" class="text-center">
                            {{ $cita->doctor->name }}
                        </td>
                    @elseif($role == 'Medico')
                        <td scope="row" class="text-center">
                            {{ $cita->patient->name }}
                        </td>
                    @endif
                    <td scope="row" class="text-center">
                        {{ $cita->scheduled_date }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->Scheduled_Time_12 }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->type }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->status }}
                    </td>
                    <td class="align-middle text-center text-sm">
                        @if ($role == 'Admin')
                            <a href="{{ url('/miscitas/' . $cita->id) }}" type="Cancelar cita" title="Ver cita"
                                id="shadow__btn" role="button"><i class='far fa-eye'
                                    style="font-size:20px; "></i></a>
                        @endif
                        <a href="{{ url('/miscitas/' . $cita->id . '/cancel') }}" type="Cancelar cita"
                            id="shadow__btn2" role="button"><i class='fas fa-window-close'
                                style="font-size:20px; "></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
