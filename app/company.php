<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }
    protected $guarded=[''];
}
