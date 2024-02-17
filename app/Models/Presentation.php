<?php

namespace App\Models;

use App\Models\Skills;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presentation extends Model
{
    use HasFactory;

    protected $fillable = [
        'gretting',
        'name',
        'job_title',
        'motto',
        'image_url',
    ];

    public function services()
    {
        return $this->hasMany(Services::class);
    }

    public function skills()
    {
        return $this->userSkills()->with('skills'); 
    }

    public function userSkills()
    {
        return $this->hasMany(UserSkills::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
