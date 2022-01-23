<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Consultation;
class Patient extends Model
{
    protected $table = 'patients';
    public $timestamps = true;
    public $guarded = [];

    protected $appends = ['age'];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function consultations()
    {
      return $this->hasMany(Consultation::class);
    }

    public function setHistoryAttribute($value)
    {
        $this->attributes['history'] = json_encode($value);
    }

    public function getHistoryAttribute($value)
    {
        return $this->attributes['history[]'] = json_decode($value);
    }

    public function getAge(){
        return \Carbon\Carbon::parse($this->birthday)->diff(\Carbon\Carbon::now())->format('%y years old');
    }
    // \Carbon\Carbon::parse($this->birthday)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');
}
