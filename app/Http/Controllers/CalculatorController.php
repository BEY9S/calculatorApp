<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NXP\MathExecutor;

class CalculatorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function get(Request $request)
    {
        return view('calculator');
    }

    public function post(Request $request) {

        $result = (new MathExecutor)->execute($request->input('res'));

        return view('calculator')->with('result', $result);
    }
}
