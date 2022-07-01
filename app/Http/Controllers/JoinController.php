<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joinus;

class JoinController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
           ]);
          
        if($request->hasFile('file')){
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('storage'), $fileName);
            $joinus_details = new Joinus;
            $joinus_details->fullname = $request->input('fullname');
            $joinus_details->date_of_birth = $request->input('date_of_birth');
            $joinus_details->email = $request->input('email');
            $joinus_details->phone = $request->input('phone');
            $joinus_details->social_media = $request->input('social_media');
            $joinus_details->name_of_organization = $request->input('name_of_organization');
            $joinus_details->expertise = $request->input('expertise');
            $joinus_details->best_skills = $request->input('best_skills');
            $joinus_details->get_to_know_about = $request->input('get_to_know_about');
            $joinus_details->involved_in_other_group = $request->input('involved_in_other_group');
            $joinus_details->join_our_community = $request->input('join_our_community');
            $joinus_details->chance_to_lead_a_project = $request->input('chance_to_lead_a_project');
            $joinus_details->hours_per_week = $request->input('hours_per_week');
            $joinus_details->cv_file = $fileName;
            $joinus_details->save();
           return redirect()->back()->with('message','Message Sent Successfully');
            

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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