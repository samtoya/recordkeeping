<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = ['name', 'phone'];
    
    /**
     * Car relationship.
     *
     * @return HasMany
     */
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
