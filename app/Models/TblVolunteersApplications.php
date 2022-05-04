<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//\Carbon\Carbon::setToStringFormat('d-m-Y');

class TblVolunteersApplications extends Model
{
	
    protected $table = 'tblvolunteersapplications';
    protected $dates = ['activity_time'];
    //use HasFactory;
}
