<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                               /* ID utilisateur */
            $table->string('nom');                                  /* nom utilisateur */
            $table->string('prenom');                               /* prenom utilisateur */
            $table->string('email')->unique();                      /* email utilisateur */
            $table->timestamp('email_verified_at')->nullable();     /* email verifié ou pas */
            $table->string('password');                             /* Password utilisateur */
            $table->string('tel')->unique();                        /* tel utilisateur */
            $table->timestamp('tel_verified_at')->nullable();       /* tel verifié ou pas */
            $table->string('ville');                                /* ville utilisateur */
            $table->string('code_postal');                          /* code postal utilisateur */
            $table->string('adresse1');                             /* adresse 1 utilisateur */
            $table->string('adresse2')->nullable();                 /* adresse 2 utilisateur */
            $table->string('role');                                 /* adresse 2 utilisateur */
            $table->string('grade')->nullable();                    /* adresse 2 utilisateur */
            $table->rememberToken();
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
