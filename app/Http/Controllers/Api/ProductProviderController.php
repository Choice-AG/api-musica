<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductProvider;
use Illuminate\Http\Request;

class ProductProviderController extends Controller
{
    public function index()
    {
        $productProvider = ProductProvider::all();

        return response()->json($productProvider);
    }

    public function store(Request $request)
    {
        $productProvider = new ProductProvider();
        $productProvider->provider_id = $request->provider_id;
        $productProvider->music_id = $request->music_id;
        $productProvider->save();

        return response()->json($productProvider, 201);
    }

    public function show($music_id)
    {
        $productProviders = ProductProvider::where('music_id', $music_id)->get();

        if ($productProviders->isNotEmpty()) {
            return response()->json($productProviders);
        } else {
            return response()->json([
                'message' => 'Product providers not found for this music'
            ], 404);
        }
    }


    public function update(Request $request, $music_id)
    {
        $productProvider = ProductProvider::where('music_id', $music_id)->first();

        if ($productProvider) {
            $productProvider->provider_id = $request->provider_id;
            $productProvider->music_id = $request->music_id;
            $productProvider->save();

            return response()->json($productProvider);
        } else {
            return response()->json([
                'message' => 'Product provider not found for this music'
            ], 404);
        }
    }

    public function destroy($music_id)
    {
        $productProvider = ProductProvider::where('music_id', $music_id)->first();

        if ($productProvider) {
            $productProvider->delete();

            return response()->json([
                'message' => 'Product provider deleted successfully for this music'
            ], 204);
        } else {
            return response()->json([
                'message' => 'Product provider not found for this music'
            ], 404);
        }
    }
}

