<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValorUtm;

class ValorUtmController extends Controller
{

       function getValorUtm(Request $request, $mes, $ano){
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');          
        $db = app('db');
        $results = $db->select("
                                SELECT valor
                                FROM valorutm
                                WHERE MES=".$mes."
                                AND ANO=".$ano."
                                ");

        return  json_encode($results);
       
   }
   
}
