<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 
        <title>PESAT Web Kampung Kita</title>
        <link rel="shortcut icon" href="{{ asset('webmag/img/bbb.png') }}"> 
 
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
 
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/bootstrap.min.css') }}"/>
 
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{ asset('webmag/css/font-awesome.min.css') }}">
 
        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/style.css') }}"/>
 
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
 
    </head>
    <body>
 
        <!-- Header -->
        <header id="header">
            <!-- Nav -->
            <div id="nav">
                <!-- Main Nav -->
                <div id="nav-fixed">
                    <div class="container">
                        <!-- logo -->
                        <div class="nav-logo">
                            <a href="{{ url('/') }}" class="logo"><img style="" src="{{ asset('webmag/img/aaa.png') }}" alt=""></a>
                        </div>
                        <!-- /logo -->
 
                        <!-- nav -->
                        <ul class="nav-menu nav navbar-nav">
                            <?php
                                $kategoris = \DB::table('kategori')->get();
                            ?>
                            @foreach($kategoris as $kt)
                            <li><a href="{{ url('kampung/kategori/'.$kt->id) }}">{{ $kt->nama }}</a></li>
                            @endforeach
                        </ul>
                        <!-- /nav -->
 
                        <!-- search & aside toggle -->
                        <div class="nav-btns">
                            <button class="aside-btn"><i class="fa fa-bars"></i></button>
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                            <form method="get" action="{{ url('search') }}">
                                <div class="search-form">
                                    <input class="search-input" type="text" name="cari" placeholder="Enter Your Search ...">
                                    <button type="submit" class="search-close"><i class="fa fa-times"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- /search & aside toggle -->
                    </div>
                </div>
                <!-- /Main Nav -->

                <!-- Aside Nav -->
                <div id="nav-aside">
                  <!-- nav -->
                  <div class="section-row">
                    <ul class="nav-aside-menu">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="https://forms.gle/ijfkaPyTPoMvdqtM6" target="_blank">Mendaftarkan Kampung</a></li>
                      <li><a href="https://youtu.be/I6L7thCFDco" target="_blank">Tentang Kami</a></li>
                    </ul>
                  </div>
                  <!-- /nav -->

                  <!-- widget posts -->
                  </div>
            </div>
            <!-- /Nav -->
        </header>
        <!-- /Header -->
 
        <!-- section -->
        <!-- /section -->
       
        <!-- section -->
       
        <!-- /section -->
 
        <!-- section -->
        @yield('content')
        <!-- /section -->
 

 
        <!-- jQuery Plugins -->
        <script src="{{ asset('webmag/js/jquery.min.js') }}"></script>
        <script src="{{ asset('webmag/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('webmag/js/main.js') }}"></script>
 
    </body>
</html>