<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectPicture
 *
 * @property int $id
 * @property int $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Project $project
 * @method static \Database\Factories\ProjectPictureFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPicture whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectPicture extends Model
{
    use HasFactory;

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
