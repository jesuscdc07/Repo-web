<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladordehomepage extends Controller
{
    public funntion home()
    {
        return view('home');
    }
}
