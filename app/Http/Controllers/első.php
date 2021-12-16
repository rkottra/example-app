<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;




class első extends Controller
{
    public function Kiírás()  {
        return 'Helló Világ';
    }

    public function Próba2($parameter)  {
        
        Log::debug('An informational message.');

        if ($parameter == 1) {
            return "egy";
        } else {
            return "nem egy";
        }
    }
}
