<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public static function faq()
    {
        return view('preguntas-frecuentes');
    }
    
    public static function exito()
    {
        return view('exito');
    }
    public static function success()
    {
        return view('success');
    }
}
