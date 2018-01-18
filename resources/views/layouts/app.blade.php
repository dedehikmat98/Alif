<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="{{asset('icon.png')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fila Store</title>

    <!-- Styles -->
    <link href="{{asset('/css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    
    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="{{asset('/frontend/css/universal.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body style="background: url({{asset('')}}); 
             background-repeat: no-repeat;
             background-size: cover; 
             background-attachment: fixed;">
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        {{-- <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a> --}}
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                            @if (Auth::check())
  
                            @endif
                            @role('admin')

                            <li><a href="{{ route('Product.index') }}"></a></li>
                            <li><a href="{{ url('admin/Home/1/edit') }}"> Halaman Home</a></li>
                            <li><a href="{{ url('admin/About/1/edit') }}"</a></li>
                            <li><a href="{{ url('admin/Store/1/edit') }}"></a></li>
                            <li><a href="{{ url('admin/Lainnya/1/edit') }}"></a></li>

                          </ul>




                              @endrole

                          <!-- Right Side Of Navbar -->
                          <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                           
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @include('layouts._flash')
        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="{{asset('/frontend/js/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript-->
    <script src="{{asset('/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/frontend/js/device.min.js')}}"></script>
    <script src="{{asset('/frontend/js/form.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.parallax.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.swipebox.min.js')}}"></script>
    <script src="{{asset('/frontend/js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/js/dataTables.bootstrap.min.js')}}"></script>
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os"></script>
    <script src="{{asset('/frontend/js/map.js')}}"></script>
    <!-- Custom Theme JavaScript-->
    <script src="{{asset('/frontend/js/universal.js')}}"></script>

    <!-- Background Slider-->
    <script src="{{asset('/frontend/js/vegas/vegas.min.js')}}"></script>
    {{-- <script src="/js/app.js"></script> --}}
    {{-- <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/js/bootstrap.min.js')}}"></script> --}}
    <script src="/js/custom.js"></script>
    <script src="{{asset('/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
    @include('tiny')
    @yield('scripts')
</body>
</html>
