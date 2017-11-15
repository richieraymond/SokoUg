<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }} | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
	  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background:#212529;">
      <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}<i class="fa fa-shopping-basket"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @if (Auth::guest())
            <li class="nav-item">
              <a class="btn btn-outline-secondary" href="{{ url('/login') }}"><i class="fa fa-sign-in"></i>Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-secondary" href="{{ url('/register') }}">Sign Up</a>
            </li>
            @else
                <li>
                    <a class="btn btn-outline-primary" href="{{ url('cart/') }}"><i class="fa fa-shopping-cart"></i>{{Cart::count() }}</a>
                </li>
                <li>
                    <a class="btn btn-outline-primary" href="{{ url('home/') }}"><i class="fa fa-dashboard"></i>My Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <button class="btn btn-outline-primary"><i class="fa fa-sign-out"></i>Logout</button>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            @endif
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-3">
          <a href="{{ url('/') }}"><img height="100px" width="150px" src="{{ asset('images/logos/sokologo.jpg')}}"></a>
            <hr>
            <div class="list-group">
              <a href="{{ url('/') }}" class="list-group-item"><i class="fa fa-hashtag"></i>All Categories</a>
              @foreach($categories as $category)
                <a href="{{url('products/categories/'.$category->id)}}" class="list-group-item"><i class="fa fa-lemon-o"></i>{{ $category->name }}({{ count($category->products) }})</a>
              @endforeach
            </div>
          </div>
          <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div class="input-group" style="margin-top:40px; margin-bottom:5px; height:60px;">
            <input class="form-control"
                   placeholder="Search SokoUg..">
            <div class="input-group-addon" ><i class="fa fa-search"></i></div>
          </div>
          <hr>
          <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#"><i class="fa fa-home"></i>Home</a>
            <a class="breadcrumb-item" href="#">Library</a>
            <a class="breadcrumb-item" href="#">Data</a>
            <span class="breadcrumb-item active">Bootstrap</span>
          </nav>
        @yield('content')
      </div>
      <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Contact Us</h3>
                    <ul>
                        <li> <a href="#"><i class="fa fa-map-marker"></i>Uma Show Grounds Lugogo</a> </li>
                        <li> <a href="#"><i class="fa fa-phone"></i>+25674655303</a> </li>
                        <li> <a href="#"><i class="fa fa-envelope"></i>info@sokoug.com</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Terms Of Use</h3>
                    <ul>
                        <li> <a href="#">Privacy</a> </li>
                        <li> <a href="#">Security</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Shipping</h3>
                    <ul>
                        <li> <a href="#">Delivery</a> </li>
                        <li> <a href="#">Courier Services</a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3>Links</h3>
                    <ul>
                        <li> <a href="#">All products</a> </li>
                        <li> <a href="#">Contact Us</a> </li>
                        <li> <a href="#">Advertise</a> </li>
                        <li> <a href="#">Register</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3>Subscribe and be the first to get the best offers!</h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center form-control" placeholder="Enter your email " style="margin-bottom:5px">
                                <button class="btn btn-primary" type="button">Send<i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="{{ url('https://www.facebook.com/sokoug') }}"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="{{ url('https://www.twitter.com/sokoug') }}"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="{{ url('https://plus.google.com/sokoug') }}"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <!-- <li> <a href=""> <i class="fa fa-pinterest">   </i> </a> </li> -->
                        <li> <a href="{{ url('https://www.youtube.com/sokoug') }}"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left">Copyright &copy;  {{ config('app.name') }} @php echo date('Y') @endphp</p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap-dropdown.js') }}"></script>
  </body>

</html>
