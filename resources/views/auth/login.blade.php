
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
        
<div class="sidenav">
         <div class="login-main-text">
            <h2> Admin Page</h2>
            <p>Login  from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
             <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Address -->
            
                  <div class="form-group">
                  <h3 style="">Go To Page Admin</h3>
                <x-label for="email" :value="__('Email')" /><br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

            <!-- Password -->
            
                  <div class="form-group">
                <x-label for="password" :value="__('Password')" /><br>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <button class="btn btn-black">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
                  
              
            </div>
         </div>
      </div>
      
<style>
body {
  font-family: "Lato", sans-serif;
}



.main-head{
  height: 150px;
  background: #FFF;
 
}

.sidenav {
  height: 100%;
  background-color: #000;
  overflow-x: hidden;
  padding-top: 20px;
}


.main {
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
  .login-form{
      margin-top: 10%;
  }

  .register-form{
      margin-top: 10%;
  }
}

@media screen and (min-width: 768px){
  .main{
      margin-left: 40%; 
  }

  .sidenav{
      width: 40%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
  }

  .login-form{
      margin-top: 80%;
  }

  .register-form{
      margin-top: 20%;
  }
}


.login-main-text{
  margin-top: 20%;
  padding: 60px;
  color: #fff;
}

.login-main-text h2{
  font-weight: 300;
}

.btn-black{
  background-color: #000 !important;
  color: #fff;
}

</style>


  

