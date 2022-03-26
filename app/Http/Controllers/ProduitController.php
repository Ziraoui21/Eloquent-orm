<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProduitController extends Controller
{
    public function store(ProduitRequest $request)
    {
        $produit = Produit::create($request->all());

        return response()
        ->json([
            "data" => $produit,
            "message" => "Product created successuflly",
            "url" => Route::current(),
        ],201);
    }

    public function getdata()
    {
        return response()
        ->json([
            "data" => Produit::all(),
            "message" => "all products",
        ],200);
    }
}
