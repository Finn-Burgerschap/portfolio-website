<?php

namespace App\Models;

use App\Enums\ProjectType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

/**
 * @property string id
 * @property ProjectType type
 * @property string title
 * @property string description
 * @property string github_link
 * @property string showcase_image
 *
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Project extends Model
{
    use HasUuids;

    protected $fillable = ['type', 'title', 'description', 'github_link', 'showcase_image'];

    protected $casts = [
        'type' => ProjectType::class,
    ];

    public function scopeProjects(Builder $query): Builder
    {
        return $query->where('type', ProjectType::Project);
    }

    public function scopeSocialStudies(Builder $query): Builder
    {
        return $query->where('type', ProjectType::SocialStudies);
    }

    public function getShowcaseImageAttribute($value): string
    {
        return Storage::disk('project-images')->url($value);
    }
}
