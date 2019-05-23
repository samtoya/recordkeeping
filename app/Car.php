<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Sofa\Eloquence\Eloquence;

class Car extends Model
{
    use Eloquence;
    
    protected $guarded = [];
    
    protected $with = ['customer'];
    
    protected $searchableColumns = ['registration_number', 'mileage'];
    
    /**
     * Customer relationship.
     *
     * @return BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
