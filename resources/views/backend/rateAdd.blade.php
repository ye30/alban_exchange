<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbars/">
    <link rel="stylesheet" href="/css/admin_head.css">
    <title>Navbar Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        html, body {
            background-color: #fff;
            color: #181819;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 90vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 50px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>


</head>
<body>
<div class="container">
    @include('backend._header')
    <main role="main">
        <div>
            <form method="POST" action="/rates" enctype="multipart/form-data">
                @csrf
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">USD Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="usd_get" name="usd_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">USD Sale</label>
                    <input class="form-control" type="number" step="0.01" id="usd_pass" name="usd_pass">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">EUR Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="eur_get" name="eur_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">EUR Sale</label>
                    <input class="form-control" type="number" step="0.01" id="eur_pass" name="eur_pass">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">RUR Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="rur_get" name="rur_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">RUR Sale</label>
                    <input class="form-control" type="number" step="0.01" id="rur_pass" name="rur_pass">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">KGS Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="kgs_get" name="kgs_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">KGS Sale</label>
                    <input class="form-control" type="number" step="0.01" id="kgs_pass" name="kgs_pass">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">GBP Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="gbp_get" name="gbp_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">GBP Sale</label>
                    <input class="form-control" type="number" step="0.01" id="dbp_pass" name="gbp_pass">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12 float-md-right float-lg-right">
                    <label for="fullname">CNY Purchase</label>
                    <input class="form-control" type="number" step="0.01" id="cny_get" name="cny_get">
                </div>
                <div class="form-group offset-md-1 offset-ld-1 offset-0 col-md-4 col-lg-4 col-12">
                    <label for="fullname">CNY Sale</label>
                    <input class="form-control" type="number" step="0.01" id="cny_pass" name="cny_pass">
                </div>

                <div class="flex justify-content-center form-group col-12">
                    <button type="sumbit" class="btn-info btn-lg btn">Отправить</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
<script>
    function labelChange() {
        var name = $('#file')[0].files[0].name;
        $('#file_label').text(name);
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script type="text/javascript" src="{{asset('js/nicEdit.js')}}"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</html>