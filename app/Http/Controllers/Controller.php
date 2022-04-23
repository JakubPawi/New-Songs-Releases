<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\ApiRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\json_decode;

class Controller
{
    public function index(Request $request) {
        return view('releases');
    }
}

