<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    use HasFactory;

    protected $gaurded = ['id' , 'created_at' , 'updated_at'];

    /**
     * Get all of the comments for the cat
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Skill::class);
    }
}
