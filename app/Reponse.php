<?php

namespace TontonGazon;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    //
    protected $fillable = [
        'id_annonce','id_tondu','id_tondeur','date_reponse','etat'
    ];

    protected $table = "reponse";
}
