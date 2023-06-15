
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
                    Estado</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($oldAppointments as $cita)
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
                    <td scope="row" class="text-center">
                        {{ $cita->status }}
                    </td>
                    <td class="align-middle text-center text-sm">

                        <form action="{{ url('/miscitas/' . $cita->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="shadow__btn" role="button"><i
                                class='fas fa-trash-alt' style="font-size:20px; "></i></button>
                        </form>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
