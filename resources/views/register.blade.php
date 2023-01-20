@extends('master')
@section('content')
 
        <div class="login-box text-center">
            <h1>Signup</h1>
        <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" placeholder="Name" name="name">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
               
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Email" name="email">
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                
            </div>
            <div class="mb-3">
                <input type="password"  placeholder="Password" name="password">
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
           
            </div>
            <input type="password" placeholder="Confirm Password" name="password_confirmation">
            <div class="mb-3">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                
            </div>
            
            <div class="submit">
                <input type="submit" value="Submit" name="signsub">		
            </div>
        </form>
    </div>  
@endsection
