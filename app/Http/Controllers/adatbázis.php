<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adatbázis extends Controller
{
    function TáblaJSON($poszt="", $betu="") {
        $eredmény = DB::select("SELECT nev, poszt 
                                FROM jatekos 
                                WHERE nev LIKE ? AND
                                      poszt LIKE ?", [$betu."%", 
                                                      $poszt."%"]);
        return $eredmény;
    }

    function TáblaHTML($poszt="", $betu="") {
        $eredmény = DB::select("SELECT nev, poszt 
                                FROM jatekos 
                                WHERE nev LIKE ? AND
                                      poszt LIKE ?", [$betu."%", 
                                                      $poszt."%"]);
        return view("jatekos", ["jatekosok"=>$eredmény]);
        //return $eredmény;
    }
}
