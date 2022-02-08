<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Intervention;
class Consultation extends Model
{
    protected $table = 'consultations';
    public $timestamps = true;
    public $guarded = [];

    
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function intervention()
    {
        return $this->hasOne(Intervention::class);
    }
}
