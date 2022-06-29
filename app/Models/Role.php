<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, TraitUuid;

    protected $fillable = [
        'id',
        'index',
        'code',
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'is_active',
    ];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'roles';

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }
}
