<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_commande', function (Blueprint $table) {
            $table->unsignedBigInteger("id");
            $table->unsignedBigInteger("produit_id");
            $table->unsignedBigInteger("commande_id");
            $table->foreign("produit_id")->references("id")->on("produit");
            $table->foreign("commande_id")->references("id")->on("commande");
            $table->primary(["produit_id","commande_id","id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_commande');
    }
}
