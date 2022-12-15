<?php

namespace App\Http\Controllers;

use App\Models\realisations;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiData()
    {
        $realisationsData = realisations::all();
        if(count($realisationsData) <= 0) return response(["message" => "Aucunes réalisations n'existe"], 204);
        return $realisationsData;
    }
}

?>
