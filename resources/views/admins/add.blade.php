  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

       <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <h4  class="link-dark">
                        {{ __("Log Out") }}
                        </h4>
                        
                    </x-responsive-nav-link>
                </form>
            </div>



             
<!DOCTYPE html>
<html>
<head>
	<title>Add  Student</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    
    <!--Fontawesome CDN-->
	{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --}}

	<!--Custom styles-->
	{{-- <link rel="stylesheet" type="text/css" href="styles.css"> --}}
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card  justify-content-center h-100">
			<div class="card-header">
				<h3 style="margin-bottom:5%;color:blue;text-decoration: underline;text-shadow: 2px 2px black;">Add New Student</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			


    
                    <hr>
                    @if(Session::get('success'))
                        <div class="alert alert-primary">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif
        <form method="POST" action="{{route('admins.store')}}">
            @csrf

            <!-- Name -->
            <div>
                 <x-label  style="color: white" for="name" :value="__('Name')" />

                <x-input id="name" class="form-control" type="text" name="name" placeholder="name" :value="old('name')"  />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
              <x-label style="color: white" for="matricule" :value="__('Matricule')" />

            <x-input id="matricule" class="form-control" type="number" name="matricule" placeholder="matricule" :value="old('matricule')" required autofocus maxlength="10" />

            </div>
            <div class="mt-4">
                <x-label style="color: white" for="result" :value="__('Result')" />

                <x-input id="result" step="0.01" class="form-control" type="number" name="result" placeholder="result" :value="old('result')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label style="color: white" for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                placeholder="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label style="color: white" for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                placeholder="confirm password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('students.log') }}">
                    {{ __('Already registered?') }}
                </a>

                <div class="form-group">
						<input type="submit" value="Save" class="btn float-right login_btn"> 
					</div>
            </div>
        </form>

        </div>
    </div>
</div>
 </div>
</div>
</div>
</div>




 
  <style>
  /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');



html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.alert alert-success{
    color: white;
    background-color: green;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
  </style>
