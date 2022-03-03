<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produit extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produit';

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function commande()
    {
        return $this->belongsToMany(Commande::class,"produit_commande")->withPivot("qte");
    }

    public static function getCategorieOfProduit($id)
    {
        return Produit::with("categorie")->find($id);
    }

    public static function getCountProductOfCommandeById($id)
    {
        return DB::table('produit')->select("produit.id","name",DB::raw("count(*) as 'Count Commande'"))
        ->join("produit_commande","produit.id","=","produit_id")
        ->where("produit.id",$id)
        ->groupBy("id","name")
        ->get();
    }
}
