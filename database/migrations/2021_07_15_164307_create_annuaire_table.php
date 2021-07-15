<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnuaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annuaire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 50)->nullable(true);
            $table->string('prenom', 50)->nullable(true);
            $table->string('telephone',15)->unique()->nullable(true);
            $table->string('adresse',100)->nullable(true);
            $table->string('pays',100)->nullable(true);
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
        Schema::dropIfExists('annuaire');
    }
}
