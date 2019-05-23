<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Sofa\Eloquence\Eloquence;

class Customer extends Model
{
    use Eloquence;
    
    protected $fillable = ['name', 'phone'];
    
    protected $searchableColumns = ['name', 'phone'];
    
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
