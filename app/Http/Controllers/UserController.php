<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $array = [
        ['name' => 'mohammad', 'age' => '19'],
        ['name' => 'huda', 'age' => '18']
    ];
    public function showData()
    {
        $arr = $this->array;
        return view('pg4', compact('arr'));
    }

};