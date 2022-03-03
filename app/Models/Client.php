<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'client';

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function commande()
    {
        return $this->hasMany(Commande::class);
    }
}
