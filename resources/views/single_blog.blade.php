@extends('layouts.app')


@section('content')
    <!-- Section Blog-Single -->
    <section class="section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="single-inner">
                        <div class="post-details">
                            <div class="detail-inner">
                                <ul class="custom-flex post-meta">
                                    <li>
                                        <i
                                            class="lni lni-calendar"></i>&nbsp;{{ $news_details->updated_at->toDateString() }}
                                    </li>
                                </ul>
                                <h2 class="post-title">
                                    {{ $news_details->title }}
                                </h2>
                            </div>
                        </div>
                        <div class="post-thumbnils">
                            <img src="/storage/{{ $news_details->image }}" alt="{{ $news_details->title }}">
                        </div>
                        <div class="post-details">
                            <div style="text-align: justify" class="detail-inner py-4">
                                {!! $news_details->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Blog-Single -->
@endsection
