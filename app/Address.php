<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function people(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Person');
    }
}
