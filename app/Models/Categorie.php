<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Categorie extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorie';

    public function produit()
    {
        return $this->hasMany(Produit::class);
    }

    public static function getProduisOfCategorie($name)
    {
        return Categorie::with(["produit" => function($query) use ($name){
            $query->where("name",$name);
        }])->whereHas("produit")->get();

        // return Categorie::with("produit")->whereHas("produit",function($query) use ($name){
        //     $query->where("name",$name);
        // })->get();
    }
}
