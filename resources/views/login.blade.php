@extends('master')
@section('content')
<body>
    <div class="login-box text-center">
        <h1>Login</h1>
        <form action ="login.php" method = "post" >
         @csrf
        <div  class="form-group">
            <input type="text" name="username" placeholder= "Username/Password" required >
            
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder= "Password" required>
        
        </div>
    
        <div class="submit">
            <input type="submit" value="login" name='login'>		
        </div>
        </form>
        <b style="font-size:25px">New?</b><a class="forgot" href='Signup.php'>Signup</a>
        
        
    </div>	
    @endsection