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
}


