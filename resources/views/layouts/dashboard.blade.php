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
    <link href="{{ asset('css/offers.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
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
                    <a class="btn btn-outline-primary" href="{{ url('/') }}">Shop</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <button class="btn btn-outline-primary">Logout</button>
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
			<h1 class="my-4">{{ config('app.name', 'PMonitor') }}</h1>
			<div class="list-group">
				<a href="{{ url('home/') }}" class="list-group-item"><i class="fa fa-dashboard"></i>Dashboard</a>
				<a href="{{ url('products/') }}" class="list-group-item"><i class="fa fa-cube"></i>My Products</a>
				<a href="{{ url('orders/') }}" class="list-group-item"><i class="fa fa-bullseye"></i>My Orders</a>
				<a href="{{ url('adverts/') }}" class="list-group-item"><i class="fa fa-buysellads"></i>My Ads</a>
				<a href="{{ url('purchases/') }}" class="list-group-item"><i class="fa fa-money"></i>My Purchases</a>
        <a href="{{ url('wishlist/')}}" class="list-group-item"><i class="fa fa-heart-o"></i>My Wish List</a>
				<a href="{{ url('subscriptions') }}" class="list-group-item"><i class="fa fa-money"></i>My Subscriptions</a>
				<a href="{{ url('profile/')}}" class="list-group-item"><i class="fa fa-user-circle"></i>My Profile</a>
				<a href="{{ url('accountsettings/') }}" class="list-group-item"><i class="fa fa-wrench"></i>Account Settings</a>
			</div>
		</div>
	<!-- /.col-lg-3 -->
	<div class="col-lg-9" style="margin-top:90px; margin-bottom:10px;">
		<div class="space space-4"></div>
			@yield('content')
	</div>
    </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright {{ config('app.name') }} &copy;  @php echo date('Y') @endphp</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">

    $('#category').on('change',function(){
            var categoryID = $(this).val();
            if(categoryID){
                $.ajax({
                    type:'GET',
                    url:'/ajax-category',
                    data:'category_id='+categoryID,
                    success:function(html){
                        $.each(html,function(create,subcategoryObj){
                             $('#subcategory').append('<option value="'+subcategoryObj.id+'">'+subcategoryObj.name+'</option>');
                        });
                    }
                });
            }else{
            }

    });
</script>
  </body>

</html>
