<?php

namespace App\Models;

use App\Models\ProjectImages;
use App\Models\ProjectSkills;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'presentation_id',
        'title',
        'subtitle',
        'basic_description',
        'description',
        'situation',
        'repository_url',
        'project_url',
        'company',
        'company_url',
        'slug',
        'app_url',
        'project_type',
        'highlighted'
    ];

    public function presentation()
    {
        return $this->belongsTo(Presentation::class);
    }

    public function projectSkills()
    {
        return $this->hasMany(ProjectSkills::class);
    }

    public function skills()
    {
        return $this->projectSkills()->with('skills');
    }

    public function images()
    {
        return $this->hasMany(ProjectImages::class);
    }

    public function getCoverImage()
    {
        return $this->images()->where('is_cover', true)->first();
    }
}
