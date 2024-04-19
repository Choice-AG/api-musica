<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index() {
        $provider = Provider::all();

        return response()->json($provider);
    }

    public function store(Request $request) {
        $provider = Provider::create($request->all());

        return response()->json($provider);
    }

    public function show(Provider $provider) {
        return response()->json($provider);
    }

    public function update(Request $request, Provider $provider) {
        $request->validate([
            'name' => 'nullable',
            'platform' => 'nullable',
            'url' => 'nullable',
            'logo' => 'nullable',
        ]);

        $provider->update($request->all());

        return response()->json($provider);
    }

    public function destroy(Provider $provider) {
        $provider->delete();

        return response()->json(null, 204);
    }
}
