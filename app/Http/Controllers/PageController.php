<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Slider;
use App\Models\Slogan;
use App\Models\Testimonial;
use App\Models\Feature;
use App\Models\Aboutus;
use App\Models\Shaper;
use App\Models\Impact;
use App\Models\Alumuni;
use App\Models\Counter;
use App\Models\News;


class PageController extends Controller
{
    public function index() {

        $sliders = Slider::orderBy('updated_at','DESC')->get();
        $testimonials = Testimonial::orderBy('updated_at','DESC')->get();
        $slogan = Slogan::orderBy('updated_at','DESC')->first();
        $features = Feature::orderBy('updated_at','DESC')->get();
        $counters = Counter::orderBy('updated_at','DESC')->take(4)->get();
        return view('index')
        ->with(['sliders' => $sliders,'testimonials' => $testimonials, 'slogan' =>$slogan,'features' =>$features,'testimonials' =>$testimonials,'counters'=>$counters]);
    }

    public function about(){
        $aboutus = Aboutus::orderBy('updated_at','DESC')->first();
        return view('about')
        ->with(['aboutus' => $aboutus]);
    }

    public function alumni() {
        $alumunis = Alumuni::orderBy('updated_at','desc')->get();
        return view('alumni')
        ->with(['alumunis' => $alumunis]);
    }

    public function shaper() {
        $shapers = Shaper::orderBy('updated_at','desc')->get();
        return view('shapers')
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
    public function Alumuni_details($name){
        $alumuni = Alumuni::where('name', $name)->first();
        return view('team-details')
        ->with(['alumuni' => $alumuni]);
    }
    
    public function shaper_details($name){
        $shaper = Shaper::where('name', $name)->first();
        return view('shaper-team-details')
        ->with(['shaper' => $shaper]);
    }

    public function blogs() {
        $news = News::paginate(2);
        return view('blogs')->with(['news' => $news]);
    }

    public function endowment_fund() {
        return view('endowment_fund');
    }

    public function blog_details() {
        return view('single_blog');
    }
}
