@extends('master')
@section('content')
<body>
    <div class="login-box text-center">
        <h1>Login</h1>
        <form action ="/login" method = "post" >
         @csrf
        <div  class="form-group">
            <input type="text" name="name" placeholder= "Username/Password" required >
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
            
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder= "Password" required>
            @error('pass')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="submit">
            <input type="submit" value="login" name='login'>		
        </div>
        </form>
        
        
        
    </div>	
    @endsection