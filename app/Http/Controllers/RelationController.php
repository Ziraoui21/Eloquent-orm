<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Produit;
use App\Models\ProduitCommande;
use App\Models\TestTable;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function oneToOne()
    {
        return Client::with("phone")->find(14);
    }

    public function oneToMany()
    {
        return Categorie::getProduisOfCategorie("Prof. Mireya Rau MD");

        //return Produit::getCategorieOfProduit(8);

        //return Client::with("commande")->find(10);
    }

    public function manyToMany()
    {
        //return Produit::with("commande")->find(4);

        //return Produit::getCountProductOfCommandeById(4);

        return ProduitCommande::all();
    }
}
