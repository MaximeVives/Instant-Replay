<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    protected $table = 'jeux';
    protected $primaryKey = 'ID_jeu';
    public $timestamps = false;
}
