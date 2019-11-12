<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Compaigns extends Authenticatable
{

    protected $guarded = [];
    protected $table = 'compaigns';

}
