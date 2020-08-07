<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = ['name', 'last_name', 'rut', 'birthdate', 'phone', 'email', 'isapre_id', 'workertype_id', 'familyburden_id', 'rent', 'city', 'commune', 'message'];

    // la entidad Quotation tiene un campo worktype y este hace referencia o pertenece a la tabla work_types
    public function workertype()
    {

        return $this->belongsTo('App\WorkerType');
    }

    public function familyburden()
    {

        return $this->belongsTo('App\FamilyBurden');
    }

    public function isapre()
    {
        return $this->belongsTo('App\Isapre');
    }
}
