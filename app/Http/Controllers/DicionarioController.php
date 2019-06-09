<?php

namespace DocumentosNormativos\Http\Controllers;

use Illuminate\Http\Request;

class DicionarioController extends Controller
{
    
    public function index() {
        return view('dicionario');
    }

}
