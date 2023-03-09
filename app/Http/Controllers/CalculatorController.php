<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator(Request $request) {
        // var_dump($request->all());
        return view('calculator_2')->with([
            'result' => '',
            'a' => '',
            'b' => ''
        ]);
    }
    public function portShowCalculator(Request $request) {
        // var_dump($request->all());
        $a = $request->a;
        $b = $request->b;
        $result = $a + $b;
        return view('calculator_2')->with([
            'result' => $result,
            'a' => $a,
            'b' => $b
        ]);
    }
}

