<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Ophalen van de gegevens uit de database
class Vote1 extends Model
{
    protected $table = 'voting';
		public $timestamps = false;
}
