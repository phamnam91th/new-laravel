<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudent(Request $request) {
        $list = [];
        for($i=0; $i<10; $i++) {
            $list[$i] = [
                'name' => 'Pham van '.$i,
                'age' => $i+20,
                'address' => 'Ha Noi '.$i
            ];
        }
        return view('listStudent')->with([
            'list' => $list
        ]
        );
    }
}
