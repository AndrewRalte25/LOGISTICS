@extends('master')
@section('content')
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">ADMIN PANEL </div>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="/categories" class="list-group-item list-group-item-action bg-light">Categories</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Items</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Payment</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
    </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      
    </nav>
    <a class="btn btn-dark" href="/CateAdd" role="button">Add Category</a>
    <H2>DEPARTMENT LIST</h2>
    <div class="container" style="display: flex; justify-content: center; align-items: center; height: 50vh">
        
    
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>ACTION</th>
                </tr>
            </thead>    
        <tbody>
            @foreach ($category as $cat)
                <tr>
                  <td>{{ $cat->id }}</td>
                  <td>{{ $cat->name }}</td>
                  <td>
                    

                    <form action="{{ '/categories/' . $cat->id }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">DELETE</button>
                    </form>
                  </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>
   
</body>
</body>
@endsection