<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('css');
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1bc18a4b6.js" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        
            <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                <a class="navbar-brand" href="{{route('home')}}"><p><b><?php echo Auth::user()->name?> </b>| Diagnonis Awal Covid-19</p></a>
                
                  
                  <div class="icon ml-auto">
                    <h5>
                      <a class="fas fa-sign-out-alt mr-3 nav-item" style="text-decoration:none; color:rgb(56, 53, 53);" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                     </a>
            
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
                    </h5>
                  </div>
                </div>
              </nav>
            
              <div class="row no-gutters mt-4">
                <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
                  <ul class="nav flex-column ml-3 mb-5">
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="{{Route('home')}}"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{Route('Data_User')}}"> <i class="fas fa-user mr-2"></i> Data User</a><hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{Route('Data_Gejala')}}"><i class="fas fa-book-open mr-2"></i> Data Gejala</a><hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{Route('Data_Diagnosis')}}"> <i class="fas fa-book-open mr-2"></i> Data Diagnosis
                    </a><hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{Route('Data_Role')}}"> <i class="fas fa-calendar-alt mr-2"></i> Data Rule</a><hr class="bg-secondary">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{Route('Hasil_Data')}}"> <i class="fas fa-book-open mr-2"></i> Hasil Diagnosis
                    </a><hr class="bg-secondary">
                  </li>
            
                  
                </ul>
                <div class="bgr bg-dark">
                  
                </div>
                  
                </div>
                <div class="col-md-10 p-5 pt-2">
                 @yield('content')
                 
                  </div>
                </div>
              </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset ('js/admin.js') }}"></script>
</body>
</html>
