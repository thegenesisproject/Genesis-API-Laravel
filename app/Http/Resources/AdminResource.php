<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'is_super' => $this->is_super,
            'job_title' => $this->job_title,
            'phone' => $this->phone,

            // include linked user
            // 'user' => new UserResource($this->user),
        ];
    }
}