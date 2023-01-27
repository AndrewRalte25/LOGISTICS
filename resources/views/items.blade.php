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
    <div class="container-fluid">
        <a class="btn btn-primary" href="/itemAdd" role="button">Add ITEM</a>
    <div>Items LIST</div>
        <table class="table">
            <tr>
              <th>ID</th>
              <th>Category_id</th>
              <th>NAME</th>
              <th>LIMIT</th>

            </tr>
            @foreach ($item as $itm)
                <tr>
                  <td>{{ $itm->id }}</td>
                  <td>{{ $itm->name }}</td>
                  <td>
                    

                    <form action="{{ '/items/' . $itm->id }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">DELETE</button>
                    </form>
                    <form action="{{ '/items/' . $itm->id }}" method="post">
                        @csrf
                        @method('Update')

                        <button type="submit">Edit</button>
                    </form>
                  </td>
                </tr>
            @endforeach
        </table>
        
    </div>
   
</body>
</body>
@endsection