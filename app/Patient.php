<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
class Patient extends Model
{
    protected $table = 'patients';
    public $timestamps = true;
    public $guarded =[];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

   public function setHistoryAttribute($value)
    {
  $this->attributes['history'] = json_encode($value);
       }

     public function getHistoryAttribute($value)
     {
         return $this->attributes['history'] = json_decode($value);
    }
}


