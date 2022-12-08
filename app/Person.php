<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'address_id'
    ];
    public function pets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Pet');
    }
    public function address(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Address');
    }
}
