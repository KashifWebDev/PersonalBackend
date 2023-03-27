<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProjectTimelineRow
 *
 * @property int $id
 * @property int $project_timeline_id
 * @property string $block_heading
 * @property string $block_description
 * @property string $block_time
 * @property int $isDone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProjectTimeline $projectTimeline
 * @method static \Database\Factories\ProjectTimelineRowFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereBlockDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereBlockHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereBlockTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereIsDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereProjectTimelineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectTimelineRow whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectTimelineRow extends Model
{
    use HasFactory;

    public function projectTimeline(){
        return $this->belongsTo(ProjectTimeline::class);
    }
}
