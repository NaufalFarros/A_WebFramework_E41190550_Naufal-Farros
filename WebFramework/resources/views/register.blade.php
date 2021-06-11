
  
  
 <link rel="stylesheet" href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"> 
  <div class="container d-flex justify-content-center mt-5">
        <div class="card mt-5 " style="width: 30rem;">
            <div class="card-header d-flex justify-content-center bg-primary text-white">
                    <h4 style="" >Register</h4>
    
            </div>
            <div class="body">
                <div class="container mt-5 ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                   
                   
                    <div class="mb-3">
                        <input class="form-control @error('name') is-invalid
                            
                        @enderror" type="text" name="name" placeholder="Name" required autocomplete="name" autofocus>
                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            
                        @enderror
                   </div>
                   <div class="mb-3">
                       <input class="form-control @error('username') is-invalid
                           
                       @enderror" type="text" name="username" placeholder="Username" required autocomplete="username" autofocus>
                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                   </div>
                   <div class="mb-3">
                       <input class="form-control @error('email') is-invalid
                           
                       @enderror" type="email" name="email" placeholder="Email" required autocomplete="email" >
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                   <div class="mb-3">
                       <input class="form-control @error('password') is-invalid
                       
                       @enderror" type="password" name="password" placeholder="password" required autocomplete="password" >
                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror      
                   </div>
                    <div class="mb-3">
                            <input class="form-control " type="password" name="password_confirmation" placeholder="confirm-password" required autocomplete="new-password">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"> Register</button>
                    </div>
                        
                    </form>
                   
                </div>
                <div class="mb-3 d-flex justify-contend-end">
                   
                    

                    <div class="ml-3">
                        <a href="{{ route('login')}}">Login Now</a>
                    </div>
                </div>
               
    
            </div>
        </div>
    </div>

   
    

