<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

protected $fillable = [

  'title',
  'artist',
  'record',
  'year',

];

// assegniamo il nome della cartella con cui c'è la relazione.
public function songs() {

  return $this->hasMany('App\Song');

}

public function images() {

  return $this->hasMany('App\Image');

}

//relazione many to many

public function genres() {

  return $this->belongstoMany('App\Genre');
}


}
