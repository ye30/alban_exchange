@include('frontend._header')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">{{$news->title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/news">News</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$news->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Blog Area Start -->
<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Details Area -->
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="pr-lg-4 mb-100">
                    <!-- Post Content -->
                    <div class="post-details-content">

                        <!-- Post Thumbnail -->
                        <div class="post-blog-thumbnail mb-30">
                            <img src="{{$news->image}}" alt="">
                        </div>

                        <!-- Post Title -->
                        <h4 class="post-title">{{$news->title}}</h4>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> {{date('F d,Y', strtotime($news->created_at))}}</a>
                            <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> {{$news->name}} {{$news->surname}}</a>
                        </div>

                        {!! $news->content !!}
                    </div>
                </div>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="confer-sidebar-area mb-100">

                    <div class="single-widget-area">
                        <h5 class="widget-title mb-30">Recent News</h5>
                        <!-- Single Recent Post Area -->
                        @foreach($newsRecent as $recent)
                            <div class="single-recent-post-area d-flex align-items-center">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="/news/{{$recent->id}}"><img src="{{$recent->image}}" alt="{{$recent->title}}"></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <a href="/news{{$recent->id}}" class="post-title">{{$recent->title}}</a>
                                <a href="/news{{$recent->id}}" class="post-date"><i class="zmdi zmdi-time"></i> {{date('F d, Y', strtotime($recent->created_at))}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

@include('frontend._footer')