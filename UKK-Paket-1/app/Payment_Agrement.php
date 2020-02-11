<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Agrement extends Model
{
    protected $table = 'payment_agrements';
    protected $fillable = ['year','nominal'];
}
