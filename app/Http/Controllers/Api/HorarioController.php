<?php

namespace App\Http\Controllers\Api;
use Carbon\Carbon;
use App\Models\Horarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\HorarioServiceInterface;

class HorarioController extends Controller
{
    public function hour(Request $request, HorarioServiceInterface $horarioServiceInterface)
    {
        $rules = [
            'date' => 'required|date_format:"Y-m-d"',
            'doctor_id' => 'required|exists:users,id'
        ];

        $this->validate($request, $rules);

        $date = $request->input('date');

        $doctorId = $request->input('doctor_id');

        return $horarioServiceInterface->getAvailableIntervals($date,$doctorId);
    }

}
