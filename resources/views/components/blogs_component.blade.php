<div class="py-4">
    <div class="container">
        <div class="section-title">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">News and Articles</h2>
            <h3 class="overlay-text">News and Articles</h3>
        </div>
        <div class="row">
            @if (count($news) === 0)
                <center>
                    <h3>No latest news and articles are available.</h3>
                </center>
            @elseif(count($news) >= 0)
                @foreach ($news as $new)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="rounded shadow blog-container">
                            <a href="/news/{{ $new->slug }}"><img style="width: 100%;height: 20rem;"
                                    src="/storage/{{ $new->image }}" alt="blog image" class="blog-image" /></a>
                            <a href="/news/{{ $new->slug }}">
                                <h5 class="py-3 px-3 mt-2">{{ $new->title }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach

            @endif

        </div>
        <center class="py-4">
            <a href="/news" class="blog-btn px-3">View all</a>
        </center>
    </div>
</div>
