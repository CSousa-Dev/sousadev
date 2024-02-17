<?php

namespace App\Models;

use App\Models\Skills;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectSkills extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'skill_id',
        'order'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skill_id');
    }
}
