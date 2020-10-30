<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
     /**
     * @var $projects
     */
    private $projects;

    /**
     * ProjectController constructor.
     *
     * @param \App\Project $listCard
     */
    public function __construct(Project $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Get Projects
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProjects(): JsonResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $projects = Project::get();

        return response()->json([
            'projects' => $projects
        ]);

    }

    /**
     * Show the create form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(): Renderable
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        

    }

    /**
     * Create a new project .
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $projects = $this->projects->create($request->onlyValidated());
        $request->session()->flash('success', 'Project created successfully.');

        return response()->json([
           
        ]);
    }

    /**
     * Update Project .
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $projects = $this->projects->update($request->onlyValidated());
        $request->session()->flash('success', 'Project updated successfully.');

        return response()->json([
           
        ]);
    }

    /**
     * Delete a new Project .
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $projects = $this->projects->delete($request->onlyValidated());
        $request->session()->flash('success', 'Project delete successfully.');

        return response()->json([
           
        ]);
    }
}
