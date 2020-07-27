@include('frontend._header')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">НОВОСТИ</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">НОВОСТИ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Our Blog Area Start -->
<div class="our-blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single Blog Area -->
            @foreach($news as $post)
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{$post->image}}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">{{$post->title}}</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> {{date('F d,Y', strtotime($post->created_at))}}</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> {{$post->name}} {{$post->surname}}</a>
                            </div>
                        </div>
                        <div class="blog-btn">
                            <a href="/news/{{$post->id}}"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
<!-- Our Blog Area End -->


@include('frontend._footer')