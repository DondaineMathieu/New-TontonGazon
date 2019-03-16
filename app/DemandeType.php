<?php

namespace TontonGazon;

use Illuminate\Database\Eloquent\Model;

class DemandeType extends Model
{
    //
    protected $fillable = [
        'titre', 'texte', 'surface', 'prix', 'id_tondu'
    ];

    protected $table = "demandetype";
}
