<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPrefernces extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'notification_settings',
        'language',
        'currency',
    ];
    protected function notificationSettings(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
