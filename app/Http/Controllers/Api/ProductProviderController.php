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

    public function show($id)
    {
        $productProvider = ProductProvider::find($id);

        if ($productProvider) {
            return response()->json($productProvider);
        } else {
            return response()->json([
                'message' => 'Product provider not found'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $productProvider = new ProductProvider();
        $productProvider->provider_id = $request->provider_id;
        $productProvider->music_id = $request->music_id;
        $productProvider->save();

        return response()->json($productProvider, 201);
    }

    public function update(Request $request, $id)
    {
        $productProvider = ProductProvider::find($id);

        if ($productProvider) {
            $productProvider->provider_id = $request->provider_id;
            $productProvider->music_id = $request->music_id;
            $productProvider->save();

            return response()->json($productProvider);
        } else {
            return response()->json([
                'message' => 'Product provider not found'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $productProvider = ProductProvider::find($id);

        if ($productProvider) {
            $productProvider->delete();

            return response()->json([
                'message' => 'Product provider deleted successfully'
            ], 204);
        } else {
            return response()->json([
                'message' => 'Product provider not found'
            ], 404);
        }
    }

}
