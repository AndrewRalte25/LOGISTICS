@extends('master')
@section('content')

<div class="mt-20">Add Category</div>
<form action="/categories" method="post" class="mt-5">
    @csrf
    <div class="mt-5"><input type="text" name="name" placeholder="Enter department name"></div>
    <div class="mt-5"><input type="text" name="code" placeholder="Enter department Code"></div>
    <div class="mt-10"><button type="submit">Submit</button></div>
</form>

@endsection