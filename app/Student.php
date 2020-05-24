<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
