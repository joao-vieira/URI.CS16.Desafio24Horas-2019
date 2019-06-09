<?php

namespace DocumentosNormativos\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    
    public function indexQualidade() {
        return view('qualidade');
    }


    public function indexPerformance() {
        return view('performance');
    }


    public function indexDisponibilidade() {
        return view('disponibilidade');
    }



}
