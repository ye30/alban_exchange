@include('frontend._header')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">ОТЗЫВЫ</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ОТЗЫВЫ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Details Area -->
            <div class="col-12">
                <div class="pr-lg-4 mb-100">
                    <!-- Comment Area -->
                    <div class="comment-area mb-80">
                        <!-- Comments Area -->
                        <div class="comment_area clearfix">
                            <h4 class="mb-30">КОММЕНТАРИИ</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                @foreach($comments as $comment)
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <div class="comment-meta-data">
                                                    <a href="#">{{$comment->first_name}} {{$comment->last_name}}</a>
                                                    <span><i class="zmdi zmdi-calendar-check"></i> {{date('F d, Y', strtotime($comment->created_at))}} at {{date('g:i a', strtotime($comment->created_at))}}</span>
                                                    {{--June 28, 2019 at 3:18 pm--}}
                                                </div>
                                                <p>{{$comment->message}}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <div class="confer-leave-a-reply-form clearfix">
                        <h4 class="mb-30">ОСТАВИТЬ КОММЕНТАРИЙ</h4>

                        <div class="contact_form">
                            <form>
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Имя" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="lastname" placeholder="Фамилия" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Комментарии" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="button" onclick="send()" class="btn confer-btn">ОТПРАВИТЬ<i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function send(){
        var firstName = $('#name').val();
        var lastName = $('#lastname').val();
        var message = $('#message').val();
        if(firstName == '' || firstName == null ||
            lastName == '' || lastName == null ||
            message == '' || message == null){
            alert('Fill in all the fields');
        }
        // var submitData = new Object();
        // submitData.firstName = firstName;
        // submitData.lastName = lastName;
        // submitData.message = message;
        $.ajax({
            cache: false,
            url : '/comment',
            dataType: 'json',
            type: 'POST',
            data :{
                firstName : firstName,
                lastName : lastName,
                message : message
            },
            success(data){
                if(data.success === true){
                    location.reload();
                }else{
                    alert('Error : '+data.errorText);
                }
            },
            error(error){
                console.log(error);
            }
        }).always(function (data) {
            console.log(data);
        });
    }
</script>
<!-- Our Blog Area Start -->
@include('frontend._footer')