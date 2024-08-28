<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pusat Sistem Informasi | @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>

    <body>
        <!-- Tim Kami -->
    <section class="team">
        <div class="container">
            <h2 class="text-center">Tim Kami</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="path/to/member1.jpg" alt="Member 1">
                    <h5>John Doe</h5>
                    <p>CEO</p>
                </div>
                <div class="col-md-3">
                    <img src="path/to/member2.jpg" alt="Member 2">
                    <h5>Jane Smith</h5>
                    <p>CTO</p>
                </div>
                <div class="col-md-3">
                    <img src="path/to/member3.jpg" alt="Member 3">
                    <h5>David Lee</h5>
                    <p>Project Manager</p>
                </div>
                <div class="col-md-3">
                    <img src="path/to/member4.jpg" alt="Member 4">
                    <h5>Emily Johnson</h5>
                    <p>Marketing Head</p>
                </div>
            </div>
        </div>
    </section>
        <div class="container" style="background:#ccc">
        <div class="alert alert-info text-center">   
            <h4 style="margin-bottom: 0px"><b>Selamat datang</b> di Pusat Sistem Informasi</h4>     
        </div>
            @include('menu')
            @include('banner')
            @include('perpus')
            @include('konten')
            @include('footer')
        </div>
        
            </div>
        </div>
    </section>
    </body>
</html>