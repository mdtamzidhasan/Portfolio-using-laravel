<?php

namespace App\Http\Controllers;

use http\Encoding\Stream\Inflate;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class Democontroller extends Controller
{
    function demoaction1(Request $request):string
    {
        return "hello1";
    }

    function demoaction2(Request $request):string
    {
        return "hello2";
    }
}
