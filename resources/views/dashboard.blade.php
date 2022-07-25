  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

     <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __("Log Out") }}
                        </h4><br>

      <a href="{{ route('students.log') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Show the result </a><br>

                        
                    </x-responsive-nav-link>
                </form>
            </div>

   

<br>



<h3 style="; color: black;text-decoration: underline; margin-left:600px"  >Page Admin</h3>



  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
  <div class="container">
      <div class="row col-md-6 col-md-offset-2 custyle">
      <table class="table table-striped custab center">
        
      <thead>
    
      <a href="/add" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Student</a>
      

      
          <tr >
            
                <td >Id</td>
                <td >matricule</td>
                <td >Name</td>
                <td >Result</td>
                <th class="text-center">Action</th>
               
            
          </tr>
      </thead>
              <tr>
               
                @foreach ($students as $student)
                
                <tr> 
                    <td >{{ $student->id }}</td>
                    <td >{{ $student['matricule']}}</td>
                    <td >{{ $student['name']}}</td>
                    <td >{{ $student['result']}}</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href={{("edit/" .$student->id )}}>
                      <span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <td class="text-center"><a class='btn btn-danger btn-xs' href={{("/students/delete/" .$student->id )}}>
                      <span class="glyphicon glyphicon-edit"></span>Delete</a>
                  


                       {{-- <a href="javascript:void(0)" onclick="$('#deletestudent').submit()" class="btn btn-danger btn-xs"> --}}
                        {{-- <form action="{{ url('/students/edit/' . $student->id) }}" method="POST" id="editstudent">
                          @csrf
                          <button type="submit" class="btn btn-info btn-xs">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                          </button>
                        </form> --}}
                         {{-- <form action="{{ url('/students/delete/' . $student->id) }}" method="POST" id="deletestudent">
                          @csrf
                          <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove"></span>Delete
                          </button>
                        </form>  --}}
                    </td>
                  
                    </td>
                  
                </tr>
            @endforeach
          </tr>
        </table>
       
      </div>
  </div>


{{-- 

  <style>
  
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


  </style> --}}
  <style>
  body{
    background-color:#EBE9E9 ;
  }
.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }

    </style>

    

