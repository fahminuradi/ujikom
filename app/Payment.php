<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo('App\Student', 'id_student');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
