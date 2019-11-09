<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LeadNumber extends Authenticatable
{

    protected $guarded = [];
    protected $table = 'lead_numbers';

}
