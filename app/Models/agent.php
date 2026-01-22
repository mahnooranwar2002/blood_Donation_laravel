<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class agent extends Model
{
    public function bloodGroup():BelongsTo{

    return $this->BelongsTo(bloodGroup::class,"bllodGroup_id");
    }
    
    
       protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'status',
        'bllodGroup_id'
    ];

}
