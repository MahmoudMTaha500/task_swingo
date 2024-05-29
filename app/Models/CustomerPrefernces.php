<?php

namespace App\Models;

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
    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
