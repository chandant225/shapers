@extends('layouts.app')

@section('content')
{{-- <div>
    <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center py-28">
        <div class="bg-white px-16 py-14 rounded-md text-center shadow-lg">
            @if(session()->has('message'))
            <div class="">
               <h1 class="text-xl mb-4 font-bold text-slate-500">{{session()->get('message')}}</h1>
            </div>
            @endif
         <center>
            <a href="/" style="background-color: rgb(0, 92, 156)"  class="px-4 py-2 no-underline hover:shadow-2xl text-xl cursor-pointer rounded-md text-md text-white">ok</a>
         </center>
        </div>
      </div>
</div> --}}

<div class="login-main-wrapper">
      <div class="main-container">
          <div class="login-process">
            <div class="login-main-container">
                  <div class="thankyou-wrapper">
                      <h1>Thank you</h1>
                        <p>for submitting your application for the Global Shapers Kathmandu Hub</p>
                        <a href="/">Back to home</a>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
   

@endsection