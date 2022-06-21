@extends('layouts.app')


@section('content')
    <!-- Section Blog-Single -->
    <section class="section blog-single" style="background-image: url('/storage/{{ $news_details->image }}') ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="detail-inner">
                                <h2 class="post-title">
                                    {{ $news_details->title }}
                                </h2>
                                 <ul class="custom-flex post-meta">
                                    <li>
                                        <i
                                            class="lni lni-calendar"></i>&nbsp;{{ $news_details->updated_at->toDateString() }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-thumbnils">
                            <img src="/storage/{{ $news_details->image }}" alt="{{ $news_details->title }}">
                        </div>
                        <div class="post-details">
                            <div style="text-align: justify;letter-spacing:1px;word-spacing: 2px;"
                                class="detail-inner py-4">
                                {!! $news_details->description !!}
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Blog-Single -->
@endsection
