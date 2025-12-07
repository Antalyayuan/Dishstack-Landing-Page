<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'dishstack_leads';

    protected $fillable = [
        'full_name',
        'email_address',
        'phone_number',
        'restaurant_name',
        'country',
        'other_countries',
        'feature',
        'other_feature',
        'demo_date',
    ];

    protected $casts = [
        'demo_date' => 'date',
    ];
}
