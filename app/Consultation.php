<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
class Consultation extends Model
{
    protected $table = 'consultations';
    public $timestamps = true;
    public $guarded = [];

    
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
