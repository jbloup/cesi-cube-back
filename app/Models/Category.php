<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'label',
    ];

    /**
     * @return HasMany
     */
    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}