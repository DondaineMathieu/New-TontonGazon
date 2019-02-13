<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->increments('id');                               /* ID avis */
            $table->string('id_tondu');                             /* ID tondu */
            $table->string('id_tondeur');                           /* ID tondeur */
            $table->date('date_publi');                             /* Date de publication de l'avis */
            $table->char('titre', 50);                              /* Titre de l'avis : max 50 car */
            $table->char('texte', 255);                             /* Texte de l'avis : max 400 car */
            $table->char('note');                          
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
