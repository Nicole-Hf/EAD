<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Edad;
use App\Models\Evaluacion;
use App\Models\Pregunta;
use App\Models\Resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PreguntaController extends Controller
{
    public function getItem($areaId, $evaluacionId)
    {
        $evaluacion = Evaluacion::findOrFail($evaluacionId);
        $area = Area::findOrFail($areaId);
        $edades = Edad::all();
        $edadId = 0;

        foreach ($edades as $edad) {
            if ($evaluacion->edadMeses >= $edad->rangoInicial && $evaluacion->edadMeses <= $edad->rangoFinal)
                $edadId = $edad->id;
        }

        $edad = Edad::findOrFail($edadId);
        $item = Pregunta::where(['areaId' => $area->id, 'edadId' => $edadId])->first();

        return response([
            'item' => $item,
            'edad' => $edad,
            'area' => $area
        ], 200);
    }

    public function saveResultado(Request $request, $evaluacionId, $preguntaId)
    {
        $validator = Validator::make($request->all(), [
            'resultado' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $pregunta = Pregunta::findOrFail($preguntaId);
        $evaluacion = Evaluacion::findOrFail($evaluacionId);

        $resultado = new Resultado();
        $resultado->resultado = $request->resultado;
        $resultado->nroItem = $pregunta->item;
        $resultado->evaluacionId = $evaluacion->id;
        $resultado->preguntaId = $pregunta->id;
        $resultado->save();

        if ($resultado->resultado == 1) {
            $evaluacion->contadorUno = $evaluacion->contadorUno + 1;
            $evaluacion->save();
        } else {
            $evaluacion->contadorCero = $evaluacion->contadorCero + 1;
            $evaluacion->save();
        }

        return response([
            'resultado' => $resultado,
            'evaluacion' => $evaluacion,
        ], 200);
    }

    public function getNextItem($resultadoId, $areaId)
    {
        /*$resultado = Resultado::findOrFail($resultadoId);
        $primerPregunta = Resultado::where('evaluacionId', $resultado->evaluacionId)->first();
        $primerResultado = $primerPregunta->resultado;*/

        $resultado = Resultado::findOrFail($resultadoId);
        $resultados = Resultado::where('evaluacionId', $resultado->evaluacionId)->get();

        foreach ($resultados as $result) {
            $pregunta = Pregunta::findOrFail($result->preguntaId);
            if ($pregunta->areaId == $areaId) {
                $primerResultado = $result->resultado;
                break;
            }
        }

        $evaluacion = Evaluacion::findOrFail($resultado->evaluacionId);
        $pregunta = Pregunta::findOrFail($resultado->preguntaId);

        if ($primerResultado == 1) {
            /*if ($resultado->resultado == 1) {
                $evaluacion->contadorUno = $evaluacion->contadorUno + 1;
                $evaluacion->save();
            }
            else {
                $evaluacion->contadorCero = $evaluacion->contadorCero + 1;
                $evaluacion->save();
            }*/

            if ($evaluacion->contadorCero <= 3) {
                if ($evaluacion->contadorUno <= 3) {
                    $nextItem = $pregunta->id + 1;
                    $nextPregunta = Pregunta::findOrFail($nextItem);
                    $edad = Edad::findOrFail($nextPregunta->edadId);
                    $area = Area::findOrFail($nextPregunta->areaId);

                    return response([
                        'item' => $nextPregunta,
                        'edad' => $edad,
                        'area' => $area,
                    ], 200);
                }
            }

            return response([
                'message' => 'El contador ha llegado a 3'
            ], 200);
        }
        else {
            /*if ($resultado->resultado == 1) {
                $evaluacion->contadorUno = $evaluacion->contadorUno + 1;
                $evaluacion->save();
            }
            else {
                $evaluacion->contadorCero = $evaluacion->contadorCero + 1;
                $evaluacion->save();
            }*/

            if ($evaluacion->contadorCero <= 3) {
                if ($evaluacion->contadorUno <= 3) {
                    $nextItem = $pregunta->id - 1;
                    $nextPregunta = Pregunta::findOrFail($nextItem);
                    $edad = Edad::findOrFail($nextPregunta->edadId);
                    $area = Area::findOrFail($nextPregunta->areaId);

                    return response([
                        'item' => $nextPregunta,
                        'edad' => $edad,
                        'area' => $area
                    ], 200);
                }
            }

            return response([
                'message' => 'El contador ha llegado a 3'
            ], 200);
        }
    }

    public function primerResultadoxArea($resultadoId, $areaId) {
        $resultado = Resultado::findOrFail($resultadoId);
        $resultados = Resultado::where('evaluacionId', $resultado->evaluacionId)->get();

        foreach ($resultados as $resultado) {
            $pregunta = Pregunta::findOrFail($resultado->preguntaId);
            if ($pregunta->areaId == $areaId) {
                $primerResultado = $resultado->resultado;
                break;
            }
        }

        return response([$primerResultado, $pregunta]);
    }
}
