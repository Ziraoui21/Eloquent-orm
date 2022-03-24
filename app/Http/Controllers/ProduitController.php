<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function store(ProduitRequest $request)
    {
        $produit = Produit::create($request->all());

        return response()
        ->json([
            "data" => $produit,
            "message" => "Product created successuflly"
        ],200);
    }

    public function getdata()
    {
        return response()
        ->json([
            "data" => Produit::all(),
            "message" => "all products"
        ],200);
    }
}
