<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtendForm extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'rut',
        'phone',
        'birthdate',
        'salary',
        'work',
        'responsibilities',
        'city',
        'commune',
        'isapre_id',
        'message'
    ];

    public function isapre()
    {
        return $this->belongsTo(Isapre::class);
    }
}
