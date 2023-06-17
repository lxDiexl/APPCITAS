
<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Especialidad</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Fecha</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Estado</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                    Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($oldAppointments as $cita)
                <tr>

                    <td scope="row" class="text-center">
                        {{ $cita->specialty->name}}
                    </td>

                    <td scope="row" class="text-center">
                        {{ $cita->scheduled_date }}
                    </td>

                    <td scope="row" class="text-center">
                        {{ $cita->status }}
                    </td>
                    <td class="align-middle text-center text-sm">

                        <a href="{{url('/miscitas/'.$cita->id)}}" class="btn btn-info btn-sm"><i class='far fa-eye' style="font-size: 20px" title="Ver"></i></a>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
