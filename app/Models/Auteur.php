<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\livre;

class Auteur extends Model
{
    protected $fillable =[
            'nom',
            'prenom',
            'email',
            'date_naissance',
            'nationalite',
            'actif',

    ];
    protected $casts =[
        'prix'=>'decimal(8,2)',
        'stock'=>'integer',
        'date_naissance'=> 'date',
        'actif'=>'boolean',



];
public function livres(){

return $this->hasMany(livre::class);
}

}
