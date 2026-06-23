<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'company_name',
        'office_address',
        'short_description',
        'phones',
        'whatsapps',
        'emails',
        'social_media'
    ];

    protected $casts = [
        'phones' => 'array',
        'whatsapps' => 'array',
        'emails' => 'array',
        'social_media' => 'array'
    ];
}
