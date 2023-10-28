<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewslatterController extends Controller
{
    public function show()
    {
        return view('components.newslatter.index');
    }
}
