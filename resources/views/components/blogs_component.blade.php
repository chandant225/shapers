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
                            <a href="/blogs/{{ $new->slug }}"><img
                                    src="https://images.unsplash.com/photo-1549923746-c502d488b3ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZW1wbG95ZWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="blog image" class="blog-image" /></a>
                            <a href="/blogs/{{ $new->slug }}">
                                <h5 class="py-3 px-3 mt-2">{{ $new->title }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach

            @endif

        </div>
        <center class="py-4">
            <a href="/blogs" class="blog-btn px-3">View all</a>
        </center>
    </div>
</div>
