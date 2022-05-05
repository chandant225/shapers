<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Slogan;
use App\Models\Testimonial;
use App\Models\Feature;
use App\Models\Aboutus;
use App\Models\Shaper;
use App\Models\Impact;


class PageController extends Controller
{
    public function index() {

        $sliders = Slider::orderBy('updated_at','DESC')->get();
        $testimonials = Testimonial::orderBy('updated_at','DESC')->get();
        $slogan = Slogan::orderBy('updated_at','DESC')->first();
        $features = Feature::orderBy('updated_at','DESC')->get();
        return view('index')
        ->with(['sliders' => $sliders,'testimonials' => $testimonials, 'slogan' =>$slogan,'features' =>$features,'testimonials' =>$testimonials]);
    }

    public function about(){
        $aboutus = Aboutus::orderBy('updated_at','DESC')->first();
        return view('about')
        ->with(['aboutus' => $aboutus]);
    }

    public function alumni() {
        $shapers = Shaper::orderBy('updated_at','desc')->get();
        return view('alumni')
        ->with(['shapers' => $shapers]);
    }

        /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    
    public function impact_details($slug) {
        $impact_details = Impact::where('slug', $slug)->first();
        return view('single_impact')->with(['impact_details' => $impact_details]);
    }
     
    public function become_a_shaper() {
        return view('become_a_shaper');
    }

    public function become_a_sponser() {
        return view('become_a_sponser');
    }

    public function single_project() {
        return view('single_project');
    }

    public function contact() {
        return view('contact');
    }

    public function thankyou() {
        return view('thankyou');
    }
    public function mental_health() {
        return view('mental_health');
    }
}
