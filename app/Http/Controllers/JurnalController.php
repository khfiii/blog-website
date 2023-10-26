<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function show()
    {
        return view("components.jurnal.index");
    }
}
