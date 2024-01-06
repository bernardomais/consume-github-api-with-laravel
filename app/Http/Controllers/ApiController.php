<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $api = Http::get('https://api.github.com/users/bernardomais');
        $github = $api->json();

        return view('api', ['github' => $github]);
    }
}
