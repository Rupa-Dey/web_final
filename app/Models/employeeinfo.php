<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeeinfo extends Model
{
    use HasFactory;
    protected $fillable = ['name','joining_date','job_title','salary',
    'email','mobile_no','address'];
}
