<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande', function (Blueprint $table) {
            $table->increments('id');                               /* ID demande */
            $table->string('id_tondu');                             /* ID tondu */
            $table->date('date_tonte');                             /* Date de la tonte */
            $table->char('titre', 50);                              /* Titre de l'annonce : max 50 car */
            $table->char('texte', 255);                             /* Texte de l'annonce : max 400 car */
            $table->char('surface');                       /* Surface a tondre */
            $table->char('prix');                          /* Surface a tondre */
            $table->char('img')->nullable();                                    /* url de l'image */
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
        Schema::dropIfExists('users');
    }
}
