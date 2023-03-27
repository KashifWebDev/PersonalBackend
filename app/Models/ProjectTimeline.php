<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectTimeline
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProjectTimelineRow> $projectRows
 * @property-read int|null $project_rows_count
 * @method static \Database\Factories\ProjectTimelineFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimeline whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectTimeline extends Model
{
    use HasFactory;

    public function projectTimelineRows(){
        return $this->hasMany(ProjectTimelineRow::class);
    }
}
