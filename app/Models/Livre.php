<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Auteur;
class Livre extends Model
{
  protected $fillable =[
        'auteur_id',
        'titre',
        'isbn',
        'prix',
        'stock',
        'data_publication',
        'disponible',
 ];
protected $casts =[
        'date_publication'=> 'date',
        'disponible'=>'boolean',



];
public function auteur(){

return $this->belongsto(auteur::class);
}



}
