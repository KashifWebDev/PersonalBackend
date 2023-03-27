<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Traits\ApiResponser;

class ProjectController extends Controller
{
    use ApiResponser;


    /**
     * @OA\Get(
     *     path="/api/projects",
     *     tags={"Projects"},
     *     summary="Fetch ALl Projects",
     *     description="This API will be responsible for listing all existing projects",
     *     operationId="index",
     *        @OA\Parameter(
     *         name="Accept-Language",
     *         value="Accept-Language",
     *         in="header",
     *         description="Set language parameter by RFC2616 <https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4>",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     ),
     * )
     */
    public function index()
    {
        return Project::count() ?
            $this->success(ProjectResource::collection(Project::all())) :
            $this->error('No Projects Found!', 404);
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
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->all() + ['slug' => \Str::slug($request->request->get('title'), "-")]);
        return $project ?
            $this->success(new ProjectResource($project)) :
            $this->error('Error while saving project', 400, $project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Project::whereId($id)->exists() ?
            $this->success(new ProjectResource(Project::whereId($id)->first())) :
            $this->error('Project Not Found', 404);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $project = Project::find($project->id);
        if($project == null){
            return $this->error("No Project found against ID: $project->id", 404);
        }
        $project->update($request->all());
        return $this->success($project, 'Project Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project = Project::find($project->id);
        if($project == null){
            return $this->error("No Project found against ID: $project->id", 404);
        }
        $project->delete();
        return $this->success($project, 'Project Deleted Successfully!');
    }
}
