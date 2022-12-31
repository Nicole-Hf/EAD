<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Edad;
use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Personal;
use App\Models\Infante;
use App\Models\Pregunta;
use App\Models\Resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class EvaluacionController extends Controller
{
    public function createTest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fecha' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'edadMeses' => 'required',
            'infanteId' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $userId = auth()->user()->id;
        $personalId = Personal::where('userId', $userId)->first();
        $evaluacion = new Evaluacion();
        $evaluacion->fecha = $request->fecha;
        $evaluacion->peso = $request->peso;
        $evaluacion->altura = $request->altura;
        $evaluacion->edadMeses = $request->edadMeses;
        $evaluacion->personalId = $personalId->id;
        $evaluacion->infanteId = $request->infanteId;
        $evaluacion->save();

        return response([
            'evaluacion' => $evaluacion,
            'message' => "Evaluación creada exitosamente"
        ], 200);
    }

    public function getTest($evaluacionId)
    {
        $evaluacion = Evaluacion::findOrFail($evaluacionId);

        $evaluacion['edadMeses'] = strip_tags($evaluacion['edadMeses']);
        $evaluacion['edadMeses']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$evaluacion['edadMeses']);

        return response([
            'evaluacion' => $evaluacion,
        ], 200);
    }

    public function getResultadoArea($evaluacionId, $areaId)
    {
        $evaluacion = Evaluacion::findOrFail($evaluacionId);
        $evaluacion->contadorCero = 0;
        $evaluacion->contadorUno = 0;
        $evaluacion->save();
        $resultados = Resultado::where('evaluacionId', $evaluacionId)->get();

        foreach ($resultados as $resultado) {
            $pregunta = Pregunta::findOrFail($resultado->preguntaId);
            if ($pregunta->areaId == $areaId) {
                switch ($areaId) {
                    case 1:
                        $evaluacion->resultadoMG = $resultado->nroItem;
                        $evaluacion->save();
                        break;
                    case 2:
                        $evaluacion->resultadoMF = $resultado->nroItem;
                        $evaluacion->save();
                        break;
                    case 3:
                        $evaluacion->resultadoAL = $resultado->nroItem;
                        $evaluacion->save();
                        break;
                    case 4:
                        $evaluacion->resultadoPS = $resultado->nroItem;
                        $evaluacion->save();
                        break;
                }
            }
        }

        switch ($areaId) {
            case 1:
                return response([
                    'resultadoArea' => $evaluacion->resultadoMG,
                    'area' => 'Motricidad Gruesa',
                    'id' => 1
                ], 200);
                break;
            case 2:
                return response([
                    'resultadoArea' => $evaluacion->resultadoMF,
                    'area' => 'Motricidad Fino Adaptativa',
                    'id' => 2
                ], 200);
                break;
            case 3:
                return response([
                    'resultadoArea' => $evaluacion->resultadoAL,
                    'area' => 'Audición Lenguaje',
                    'id' => 3
                ], 200);
                break;
            case 4:
                return response([
                    'resultadoArea' => $evaluacion->resultadoPS,
                    'area' => 'Personal Social',
                    'id' => 4
                ], 200);
                break;
        }
    }

    function getResultTotal($testId)
    {
        $evaluacion = Evaluacion::findOrFail($testId);

        $total = $evaluacion->resultadoMG + $evaluacion->resultadoMF + $evaluacion->resultadoAL + $evaluacion->resultadoPS;
        $evaluacion->total = $total;
        $evaluacion->save();

        $edades = Edad::all();

        foreach ($edades as $edad) {
            if ($evaluacion->edadMeses >= $edad->rangoInicial && $evaluacion->edadMeses <= $edad->rangoFinal)
            {
                $edadId = $edad->id;
                break;
            }
        }

        $escalas = Escala::where('edadId', $edadId)->get();

        foreach ($escalas as $escala) {
            if (($evaluacion->total >= $escala->rangoInicial && $evaluacion->total <= $escala->rangoFinal))
            {
                $etiqueta = $escala->etiqueta;
                break;
            }
        }

        return response([
            'total' => $evaluacion->total,
            'areaMG' => $evaluacion->resultadoMG,
            'areaMF' => $evaluacion->resultadoMF,
            'areaAL' => $evaluacion->resultadoAL,
            'areaPS' => $evaluacion->resultadoPS,
            'etiqueta' => $etiqueta,
        ], 200);
    }

    public function getTests($infanteId)
    {
        $kid = Infante::find($infanteId);
        $list = new Evaluacion();
        $list = $list->getAllTests($kid->id);

        foreach ($list as $item) {
            $item['fecha'] = strip_tags($item['fecha']);
            $item['fecha']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$item['fecha']);
        }

        return response()->json($list);
    }

    public function saveObservation(Request $request, $id)
    {
        $evaluacion = Evaluacion::find($id);
        $evaluacion->observaciones = $request->observaciones;
        $evaluacion->save();

        return response([
            'evaluacion' => $evaluacion
        ], 200);
    }
}
