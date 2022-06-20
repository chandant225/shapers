@extends('layouts.app')
@section('content')
    <!-- Section Latest-News-Area-Blog-list  -->
    <section class="section latest-news-area blog-list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section-title -->
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">News and articles</h2>
                        <h3 class="overlay-text">News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">

                        @if (count($news) === 0)
                            <center>
                                <h4>No news and articles are avaliable.</h4>
                            </center>
                        @elseif(count($news) >= 1)
                            @foreach ($news as $new)
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".2s">
                                        <div class="image">
                                            <a href="/blogs/{{ $new->slug }}"> <img style="height:15rem" class="thumb"
                                                    src="/storage/{{ $new->image }}" alt="#"></a>
                                        </div>
                                        <div class="content-body">
                                            <h4 class="title"><a href="/blogs/{{ $new->slug }}">{{ $new->title }}</a>
                                            </h4>

                                            {!! Str::limit($new->excerpt, 80, ' ...') !!}
                                            <div class="button">
                                                <a href="/blogs/{{ $new->slug }}" class="btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="pagination center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Latest-News-Area-Blog-list  -->
@endsection
