<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
class Department extends Model
{
    protected $table = 'departments';
    public $timestamps = false;
    public $guarded =[];
  
    public function patients()
    {
      return $this->hasMany(Patient::class);
    }
}
