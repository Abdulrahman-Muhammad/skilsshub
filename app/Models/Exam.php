<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $gaurded = ['id' , 'created_at' , 'updated_at'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
