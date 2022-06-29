<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory, TraitUuid;

    protected $fillable = [
        'id',
        'index',
        'code',
        'name',
        'url',
        'icon',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'is_active',
    ];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'social_networks';
}
