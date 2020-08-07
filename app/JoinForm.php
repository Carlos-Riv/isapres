<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joinform extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message', 'isapre'];
}
