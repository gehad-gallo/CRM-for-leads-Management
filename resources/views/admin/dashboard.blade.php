<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  
  <link rel="stylesheet" href="{{asset('assets/css/login/style.css')}}">
<style>
  	.spacer-div {
  margin: 20px; /* Adds 20px margin on all sides */
}

.spacer-div {
  margin-top: 10px;
  margin-right: 70px;
  margin-bottom: 10px;
  margin-left: 70px;
}
  .right-float {
    float: right;
  }
  </style>
  </head>
  <body><br>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">
    <h2>All Clients </h2>
  </div><br>

 
</nav> 
<div class="spacer-div">
	<a href="{{route('admin.logout')}}"><span class="right-float">logout</span></a>
  	<table class="table table-striped table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @isset($all_Clients)
        @foreach ($all_Clients as $i => $xx)
            <tr>
                <th scope="row">{{ $all_Clients->firstItem() + $loop->index }}</th>
                <td>{{ $xx->name }}</td>
                <td>{{ $xx->phone }}</td>
                <td>{{ $xx->created_at }}</td>
                <td>
                     <a href="{{route('delete.client',$xx->id)}}" onclick="return confirm('Are you sure you want to delete this client?');">
                      <button type="button" class="btn btn-outline-danger">Delete</button>
                    </a> 

                </td>
            </tr>
        @endforeach
    @endisset
  </tbody>
</table>
  </div>
  <div>
    
{!! $all_Clients->links() !!}
  </div>

  <script src="{{asset('assets/js/login/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
