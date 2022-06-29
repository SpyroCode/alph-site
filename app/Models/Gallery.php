<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory, TraitUuid;

    protected $fillable = [
        'id',
        'index',
        'name',
        'image',
        'icon',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'is_active',
    ];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'galleries';
}
