<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->increments('id');                               /* ID reponse */
            $table->string('id_annonce');                       /* ID annonce */
            $table->string('id_tondu');                             /* ID tondu */
            $table->string('id_tondeur');                           /* ID tondeur */
            $table->date('date_reponse');                           /* Date de reponse */
            $table->string('etat');                                /* Etat */
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
