<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteInfo extends Model
{
    use HasFactory, TraitUuid;

    protected $fillable = [
        'id',
        'index',
        'address',
        'phone_1',
        'phone_2',
        'location',
        'email',
        'about_us',
        'services',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'is_active',
    ];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'website_infos';
}
