<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videocontroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       return "I am single line controller";
    }
}
