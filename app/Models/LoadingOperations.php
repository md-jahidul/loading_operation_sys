<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoadingOperations extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function masterDelivery(): BelongsTo
    {
        return $this->belongsTo(DeliveryMaster::class, 'delivery_code', 'delivery_code');
    }
}
