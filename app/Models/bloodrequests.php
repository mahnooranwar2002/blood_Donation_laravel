<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class bloodrequests extends Model
{
    protected $fillable = [
        'Reciever_id',
        'bloodGroupid',
        'status',
        'address'
    ];

    public function bloodGroup(): BelongsTo
    {
        return $this->belongsTo(bloodGroup::class, "bloodGroupid", "id");
    }

    public function users(): BelongsTo
    {
        // Foreign key ka naam wahi rakhein jo DB table mein hai
        return $this->belongsTo(User::class, "Reciever_id");
    }
}