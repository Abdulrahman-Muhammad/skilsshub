<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $gaurded = ['id' , 'created_at' , 'updated_at'];

    /**
     * Get the user that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cats()
    {
        return $this->belongsTo(cat::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
