<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model
{
    use HasFactory;

    protected $fillable = [
        'presentation_id',
        'skill_id',
        'order'
    ];


    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skill_id');
    }
}
