<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Infante;

class ChildrenController extends Controller
{
    /**
     * Endpoint for get all children
     *
     */
    public function getChildren() {
        $list = new Infante();
        $list = $list->getAllChildren();
        foreach ($list as $item) {
            $item['nombre'] = strip_tags($item['nombre']);
            $item['nombre']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$item['nombre']);
        }

        return response()->json($list);
    }

    /**
     * Endpoint for get a specific kid
     *
     */
    public function getKid($id) {
        $kid = Infante::findOrFail($id);

        return response($kid, 200);
    }
}
