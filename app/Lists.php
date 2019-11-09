<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lists extends Authenticatable
{

    protected $guarded = [];
    protected $table = 'lists';

}
