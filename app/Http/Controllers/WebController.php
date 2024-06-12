<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function quienesS() {
        return view('web.quienes_somos');
    }

    public function index() {
        //vamos a agregar otras cosas
    }
}
