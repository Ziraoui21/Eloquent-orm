<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commande';

    public function Client()
    {
        return $this->belongsTo(Client::class);
        $this->id;
    }

    public function Produit()
    {
        return $this->belongsToMany(Produit::class,"produit_commande");
    }
}
