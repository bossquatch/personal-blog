@extends('layouts.default')
@section('content')

<h3>A typical day goes something like this:</h3>

<!-- Portfolio Content -->
<div class="portfolio-content">

    <ul class="portfolio-filters">
        <li class="active">
            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
        </li>
        <li>
            <a class="filter btn btn-sm btn-link" data-group="category_media">Media</a>
        </li>
        <li>
            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
        </li>
        <li>
            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
        </li>
        <li>
            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
        </li>
        <li>
            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
        </li>
    </ul>

        <!-- Portfolio Grid -->
    <div class="portfolio-grid three-columns">

        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/1.jpg" alt="A Few Good Men" title="" />
                <a href="https://www.youtube.com/embed/pebaBnA6PTY" class="lightbox mfp-iframe" title="A Few Good Men"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">When delivering the impossible is just not good enough</h4>
            <span class="category">YouTube Videos</span>
        </figure>

        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/2.jpg" alt="A Few Good Men" title="" />
                <a href="https://www.youtube.com/embed/rJGhA2vLdA4" class="lightbox mfp-iframe" title="John Wick"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">My reaction to, "This is the way it has always been done..."</h4>
            <span class="category">YouTube Videos</span>
        </figure>

        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/3.jpg" alt="A Few Good Men" title="" />
                <a href="/images/patrick.gif" class="lightbox mfp-iframe" title="John Wick"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">Lunch</h4>
            <span class="category">YouTube Videos</span>
        </figure>


        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/4.jpg" alt="IG-11" title="" />
                <a href="https://www.youtube.com/embed/YDXduFEjiQk" class="lightbox mfp-iframe" title="IG-11"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">Can't get past the issue?  Self terminate.</h4>
            <span class="category">YouTube Videos</span>
        </figure>

        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/5.jpg" alt="K2-SO" title="" />
                <a href="https://www.youtube.com/embed/II1x9ptMZag" class="lightbox mfp-iframe" title="K2-SO"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">My hero.</h4>
            <span class="category">YouTube Videos</span>
        </figure>


        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/6.jpg" alt="Young Frankenstein" title="" />
                <a href="https://www.youtube.com/embed/FiG-ZfnYkl0" class="lightbox mfp-iframe" title="Young Frankenstein"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">Finally! I did it.</h4>
            <span class="category">YouTube Videos</span>
        </figure>

        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
            <div class="portfolio-item-img">
                <img src="images/portfolio/6.jpg" alt="python" title="" />
                <a href="https://www.youtube.com/embed/NmPhaG1ud38" class="lightbox mfp-iframe" title="python"></a>
            </div>

            <i class="fas fa-video"></i>
            <h4 class="name">Success!</h4>
            <span class="category">YouTube Videos</span>
        </figure>

    </div>
</div>
@stop
