@include('frontend._header')
<style>
    table th:first-child {
        border-radius: 6px 0 0 0;
        -moz-border-radius: 6px 0 0 0;
        -webkit-border-radius: 6px 0 0 0;
    }

    table th:last-child {
        border-radius: 0 6px 0 0;
        -moz-border-radius: 0 6px 0 0;
        -webkit-border-radius: 0 6px 0 0;
    }
</style>
<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bg-img bg-gradient-overlay jarallax">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="page-title">ВАЛЮТА</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">ГЛАВНАЯ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ВАЛЮТА</li>
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
        <div class="row justify-content-center mb-5">
            <div class="confer-leave-a-reply-form clearfix">
                <h4 class="mb-30">КОНВЕРТЕР ВАЛЮТ</h4>

                <!-- Leave A Reply -->
                <div class="contact_form">
                    <form action="#" method="post">
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Form Group -->
                                <div class="col-12 col-lg-6">
                                    <div class="dropdown">
                                        <select class="dropdown-select-version select" name="options" id="main">
                                            <option value="1">KZT</option>
                                            @foreach($rates as $rate)
                                                <option value="{{$rate['price']}}">{{$rate['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="col-12 col-lg-6">
                                    <div class="dropdown">
                                        <select class="dropdown-select-version select" name="options" id="target">
                                            <option value="1">KZT</option>
                                            @foreach($rates as $rate)
                                                <option value="{{$rate['price']}}">{{$rate['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control mb-30" name="name" id="main_count" placeholder="Cумма" required>
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="name" id="target_count" required readonly>
                                    </div>
                                </div>


                                <!-- Button -->
                                <div class="col-12">
                                    <button type="button" onclick="convert()" class="btn confer-btn">КОНВЕРТИРОВАТЬ</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ur-speaker-area bg-img bg-gradient-overlay section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p class="text-black-50">Актуальна на {{date('F d, Y', strtotime($localRates->created_at))}}</p>
                    <h4 class="text-black-50">КУРС ВАЛЮТ АЛБАН EXCHANGE</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 " style="    background-color: white;
    border-radius: 40px;
    padding: 50px;">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ВАЛЮТА</th>
                        <th>ПРОДАЖА</th>
                        <th>ПОКУПКА</th>
                    </tr>
                    <tr>
                        <td>USD</td>
                        <td>{{$localRates->USD_GET}}</td>
                        <td>{{$localRates->USD_PASS}}</td>
                    </tr>
                    <tr>
                        <td>EUR</td>
                        <td>{{$localRates->EUR_GET}}</td>
                        <td>{{$localRates->EUR_PASS}}</td>
                    </tr>
                    <tr>
                        <td>RUB</td>
                        <td>{{$localRates->RUR_GET}}</td>
                        <td>{{$localRates->RUR_PASS}}</td>
                    </tr>
                    <tr>
                        <td>KGS</td>
                        <td>{{$localRates->KGS_GET}}</td>
                        <td>{{$localRates->KGS_PASS}}</td>
                    </tr>
                    <tr>
                        <td>GBP</td>
                        <td>{{$localRates->GBP_GET}}</td>
                        <td>{{$localRates->GBP_PASS}}</td>
                    </tr>
                    <tr>
                        <td>CNY</td>
                        <td>{{$localRates->CNY_GET}}</td>
                        <td>{{$localRates->CNY_PASS}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="ur-speaker-area bg-img bg-gradient-overlay section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <p class="text-black-50">Актуальна на {{date('F d, Y', time())}}</p>
                    <h4 class="text-black-50">КУРС ВАЛЮТ</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 " style="    background-color: white;
    border-radius: 40px;
    padding: 50px;">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ВАЛЮТА</th>
                        <th>ИЗМЕНЕНИЕ</th>
                        <th>КУРС</th>
                    </tr>
                    @foreach ($rates as $rate)
                        <tr>
                            <td>{{$rate['title']}}</td>
                            <td><i class="zmdi {{$rate['class']}}"></i>{{$rate['change']}}</td>
                            <td>{{$rate['price']}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

<section class="confer-blog-details-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Details Area -->
            <div class="col-12">
                <div class="pr-lg-4 mb-100">
                    <div class="confer-leave-a-reply-form clearfix">
                        <h4 class="mb-30">ЗАБРОНИРОВАТЬ СУММУ</h4>

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
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="phone" placeholder="+77001234567" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control mb-30" name="name" id="count" placeholder="Сумма" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="dropdown">
                                                <select class="dropdown-select-version select" name="options" id="requested">
                                                    <option value="KZT">KZT</option>
                                                    @foreach($rates as $rate)
                                                        <option value="{{$rate['title']}}">{{$rate['title']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="button" onclick="send()" class="btn confer-btn">ОТПРАВИТЬ ЗАПРОС<i class="zmdi zmdi-long-arrow-right"></i></button>
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
    function convert() {
        var val1 = parseFloat($('#main').val());
        var val2 = parseFloat($('#target').val());
        var count = parseInt($('#main_count').val());
        var result = (val1 * count / val2).toFixed(2);
        $('#target_count').val(parseFloat(result));
    }

    function send(){
        var firstName = $('#name').val();
        var lastName = $('#lastname').val();
        var phone = $('#phone').val();
        var requested = $('#requested').val();
        var count = $('#count').val();
        if(firstName == '' || firstName == null ||
            lastName == '' || lastName == null ||
            phone == '' || phone == null) {
            alert('Fill in all the fields');
            return;
        }
        if(count <= 0 ){
            alert('Count will be Greater then 0');
            return;
        }
        $.ajax({
            cache: false,
            url : '/application',
            dataType: 'json',
            type: 'POST',
            data :{
                firstName : firstName,
                lastName : lastName,
                requested : requested,
                count : count,
                phone : phone
            },
            success(data){
                if(data.success === true){
                    alert('we will contact you shortly');
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

@include('frontend._footer')