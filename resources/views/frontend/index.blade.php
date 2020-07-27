@include('frontend._header')
<!-- Slider Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <!-- Single Slide -->
        @foreach($news as $post)
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{$post->image}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{$post->title}}</h2>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="/news/{{$post->id}}" class="btn confer-btn">ПОДРОБНЕЕ<i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/3.jpg);">
    <div class="container">
        <div class="row">
            <!-- Single Speaker Area -->
            @foreach ($currency as $rate)
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms" style="background-color: {{$rate['color']}}">
                        <h6 class="ticket-plan">{{$rate['title']}}</h6>
                        <!-- Ticket Icon -->
                        <h2 class="ticket-price">{{$rate['price']}}</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p>{{$rate['change']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                    <a class="btn confer-btn-white" href="/rates">ПОСМОТРЕТЬ ВЕСЬ КУРС<i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Schedule Area Start -->
<section class="our-schedule-area bg-white section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="schedule-tab">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Албан Exchange 1</a>
                        </li>
                        <!-- Nav Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Албан Exchange 4</a>
                        </li>
                        <!-- Nav Item -->
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Албан Exchange 5</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#step-four" role="tab" aria-controls="step-four" aria-expanded="true">Албан Exchange 6</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="conferScheduleTabContent">
                    <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                        <!-- Single Tab Content -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.6390507770207!2d76.9329257157623!3d43.258986079136726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ebb5c193251%3A0x604f3c816d51c850!2z0YPQu9C40YbQsCDQk9C-0LPQvtC70Y8gOTIsINCQ0LvQvNCw0YLRiyAwNTAwMDA!5e0!3m2!1sru!2skz!4v1588862840356!5m2!1sru!2skz" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                        <!-- Single Tab Content -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2054.8203317856533!2d76.91349961473873!3d43.252369492987945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883694b8fca1565%3A0x184f34136af67100!2z0YPQu9C40YbQsCDQotC-0LvQtSDQkdC4IDEzMNCwLCDQkNC70LzQsNGC0YsgMDUwMDAw!5e0!3m2!1sru!2skz!4v1588862782997!5m2!1sru!2skz" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                        <!-- Single Tab Content -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.6088253212615!2d76.95487091571316!3d43.23866048715452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836efc7556308d%3A0x80535643507e0c1!2z0L_RgNC-0YHQv9C10LrRgiDQlNC-0YHRgtGL0LogODksINCQ0LvQvNCw0YLRiyAwNTAwMDA!5e0!3m2!1sru!2skz!4v1588948520889!5m2!1sru!2skz" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="step-four" role="tabpanel" aria-labelledby="thursday-tab">
                        <!-- Single Tab Content -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222.2789583978358!2d76.86269150657732!3d43.228663492509746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388369ae8754b50d%3A0x9cc31d4732e2d680!2z0JDQsdCw0Y8g0J_RgNCw0LLQtNCwLCDQtDE3!5e0!3m2!1sru!2skz!4v1588862952817!5m2!1sru!2skz" allowfullscreen>
						</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="our-client-area about-page section-padding-0-100">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p>ОТЗЫВЫ</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Client Slider -->
                <div class="client-area owl-carousel">
                    <!-- Single Client Slide -->
                    @foreach($reviews as $comment)
                        <div class="single-client-content bg-boxshadow wow fadeInUp" data-wow-delay="300ms">
                        <div class="single-client-text about-page">
                            <p>{{$comment->message}}</p>
                            <!-- Thumb and info -->
                            <div class="single-client-thumb-info d-flex align-items-center">
                                <!-- Thumb -->
                                <!-- Info -->
                                <div class="client-info">
                                    <h6>{{$comment->first_name}} {{$comment->last_name}}</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Icon -->
                        <div class="client-icon">
                            <i class="zmdi zmdi-quote"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Schedule Area End -->

<!-- Slider End -->

@include('frontend._footer')