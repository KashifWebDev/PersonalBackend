<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectTimelineRequest;
use App\Http\Requests\UpdateProjectTimelineRequest;
use App\Models\ProjectTimeline;

class ProjectTimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectTimelineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectTimelineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectTimeline  $projectTimeline
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTimeline $projectTimeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectTimeline  $projectTimeline
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectTimeline $projectTimeline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectTimelineRequest  $request
     * @param  \App\Models\ProjectTimeline  $projectTimeline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectTimelineRequest $request, ProjectTimeline $projectTimeline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectTimeline  $projectTimeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectTimeline $projectTimeline)
    {
        //
    }
}
