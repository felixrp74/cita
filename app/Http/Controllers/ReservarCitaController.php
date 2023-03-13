<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ReservarCitaController extends Controller
{
    //

    public function index(){
        $citas = DB::table('cita')->get();

        return $cita
    }
    
}
