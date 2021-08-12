<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physicians extends Model
{
    public $timestamps = false;
    protected $fillable= ['lastName','firstName','speciality'];
}
