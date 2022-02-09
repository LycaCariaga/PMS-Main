<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultation;
use App\Patient;
class Intervention extends Model
{
    protected $table = 'interventions';
    public $timestamps = true;
    public $guarded = [];

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
