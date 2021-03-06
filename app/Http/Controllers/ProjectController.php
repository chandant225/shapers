<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Impact;
use App\Models\Project_des;
use App\Models\Ishape;
use App\Models\Project_gallery;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_description = Project_des::orderBy('updated_at','DESC')->first();
        $projects = Project::where('past_project','0')->orderBy('position','asc')->get();
        $past_projects = Project::where('past_project','1')->orderBy('project_year','asc')->get();
        $ishapes = Ishape::all();
        return view('project')
        ->with(['projects' => $projects,'project_description' => $project_description,'past_projects' => $past_projects,'ishapes' => $ishapes]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project_details = Project::where('slug', $slug)->first();
        $project_galleries = Project_gallery::where('project_slug',$slug)->get();
       
        $impacts = Impact::where('project_slug',$slug)->orderBy('project_year','asc')->get();
        return view('single_project')->with(['project_details' => $project_details,'impacts' => $impacts,'project_galleries'=>$project_galleries]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
