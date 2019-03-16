<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandetype', function (Blueprint $table) {
            $table->increments('id');                     
            $table->string('id_tondu')->unique();         
            $table->char('titre', 50);                    
            $table->char('texte', 255);                   
            $table->char('surface');                      
            $table->char('prix');                         
            $table->char('img')->nullable();              
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
