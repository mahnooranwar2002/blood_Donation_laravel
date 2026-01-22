<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class bloodGroup extends Model
{
    protected $table = 'blood_groups'; // Agar table name different hai

    public function agents(): HasMany
    {
        // Yahan 'bloodGroup_id' specify karein (as per your ER diagram)
        return $this->hasMany(agent::class, 'bloodGroup_id');
    }

    public function bloodrequests(): HasMany
    {
        // Yahan 'bloodGroupid' specify karein jo error de raha tha
        return $this->hasMany(bloodrequests::class, 'bloodGroupid');
    }
}