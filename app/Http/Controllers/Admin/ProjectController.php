<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNomeModelloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $newProject = new Project();
        $newProject->fill($data);
        $newProject->save();

        return to_route("admin.projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function edit(NomeModello $nomeModello)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNomeModelloRequest  $request
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNomeModelloRequest $request, NomeModello $nomeModello)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NomeModello  $nomeModello
     * @return \Illuminate\Http\Response
     */
    public function destroy(NomeModello $nomeModello)
    {
        //
    }
}
