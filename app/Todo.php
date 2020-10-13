<?php

//le model Todo comporte les differents champs de notre formulaire qui sera introduit dans notre base de données


namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
    	'name','description','done'
    ];
}
