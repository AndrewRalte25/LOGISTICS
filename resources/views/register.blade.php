@extends('master')
@section('content')
 
        <div class="login-box text-center">
            <h1>Signup</h1>
        <form action="sign.php" method="post">
            @csrf
            <div class="form-group">
                <input type="text" required placeholder="Name" name="name">
               
            </div>
            <div class="form-group">
                <input type="text" required placeholder="Email" name="email">
                
            </div>
            <div class="form-group">
                <input type="password" required placeholder="Password" name="pass">
           
            </div>
            <div class="form-group">
                <input type="password" required placeholder="Confirm Password" name="pass2">
               
            </div>
            
            <div class="submit">
                <input type="submit" value="Submit" name="signsub">		
            </div>
        </form>
        <b style="font-size:20px"> Already have an Account?</b> 
        <a class="forgot" href='index.php'>Login</a>
    </div>  
@endsection
