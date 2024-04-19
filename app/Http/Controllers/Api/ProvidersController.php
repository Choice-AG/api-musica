<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index() {
        $provider = Provider::orderBy('id', 'asc')->get();

        return response()->json($provider);
    }
}
