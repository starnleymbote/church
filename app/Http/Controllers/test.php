<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\index;

class test extends Controller
{
    public function store(Request $request)
    {
     
        $data = dd($request->all());
        return $data;
    }
}
