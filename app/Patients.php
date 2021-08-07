<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    public $timestamps = false;
    protected $fillable= ['lastName', 'firstName', 'sex', 'dateOfBirth'];
}
