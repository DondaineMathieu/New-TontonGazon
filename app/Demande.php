<?php

namespace TontonGazon;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    //
    protected $fillable = [
        'titre', 'texte', 'surface', 'prix',
    ];

    protected $table = "demande";
}
