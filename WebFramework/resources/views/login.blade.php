<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('loginform/fonts/icomoon/style.css') }}"> 

    <link rel="stylesheet" href="{{ asset('loginform/css/oww.carousel.min.css') }}" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginform/css/bootstrap.min.css') }}" >
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginform/css/style.css') }}" >

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3> <br> <strong>LOGIN to- NAUFAL FARROS APLICATION</strong></h3>
            <p class="mb-4">Belajar terus . man jadda wa jadda</p>

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
           @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
             <div class="form-group mb-3">
                <label for="username">Username/Email</label>
                <input type="text" class="form-control @error('username') is-invalid            
                @enderror" placeholder="Masukkan Nama" id="username" name="username">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid
                @enderror" placeholder="Masukkan Password" id="password" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
              
              <div class="d-flex mb-2 align-items-center">
                 
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
            </div>
                <div class="d-flex mb-2 align-items-center">
                
                    <span class="ml-auto"><a href="{{ route('register') }}" class="forgot-pass">Register</a></span> 

              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{ asset('loginform/js/jquery-3.3.1.min.js') }}"></script> 
    <script src="{{ asset('loginform/js/popper.min.js') }}"></script> 
    <script src="{{ asset('loginform/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('loginform/js/main.js') }}"></script>  
  </body>
</html>