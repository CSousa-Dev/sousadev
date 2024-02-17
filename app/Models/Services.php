<?php

namespace App\Models;

use App\Models\Presentation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'presentation_id',
        'title',
        'description',
        'image_url',
        'order',
    ];

    public function presentation()
    {
        return $this->belongsTo(Presentation::class);
    }
}
