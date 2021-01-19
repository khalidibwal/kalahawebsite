<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class wharf extends Model
{
    protected $table = 'wharfreservations';
    protected $dates = ['dob'];
}
