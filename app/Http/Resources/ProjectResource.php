<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'about' => $this->about,
            'client' => $this->client,
            'slug' => $this->slug,
            'url' => $this->url,
            'tags' => $this->tags,
            'start_date' => $this->start_date,
            'pictures' =>  ProjectPictureResource::collection($this->pictures)
        ];
    }
}
