<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th
                    class="text-uppercase text-secondary text-center text-sm text-xxs font-weight-bolder  ">
                    ID</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                    Descripción</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Especialidad</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                    Veterinario</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Fecha</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Hora</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Tipo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pendingAppointments as $cita)
                <tr>
                    <td class="align-middle text-center text-sm" scope="row">
                        {{ $cita->id }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->description }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->specialty->name}}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->doctor->name }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->scheduled_date }}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->Scheduled_Time_12}}
                    </td>
                    <td scope="row" class="text-center">
                        {{ $cita->type }}
                    </td>
                    <td class="align-middle text-center text-sm">

                        <form action="{{ url('/miscitas/'.$cita->id.'/cancel') }}" method="POST">
                            @csrf

                            <button type="Cancelar cita" class="shadow__btn" role="button"><i
                                    class='fas fa-window-close' style="font-size:21px; "></i></button>
                        </form>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
