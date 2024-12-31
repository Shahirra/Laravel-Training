<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #333;
    }

    .navbar-brand {
      color: #fff;
      font-size: 24px;
    }

    .navbar-nav .nav-link {
      color: #fff;
      font-size: 16px;
    }

    .page-header {
      margin-top: 30px;
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Books Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <div class="row">
     <div class="col-md-3" style="margin-top: 30px;">
      <div class="list-group">
        <a href="#" class="list-group-item active">Menu</a>
        <a href="{{ route('books.index') }}" class="list-group-item">Books</a>
        <a href="{{ route('create-book') }}" class="list-group-item">Create Book</a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="page-header">
        <h1>Create Book</h1>
      </div>
      <form method="POST" action="{{ route('books.store') }}">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="des" id="description">
        </div>
        <div class="form-group">
          <label for="pic">Picture</label>
          <input type="text" class="form-control" name="picture" id="pic">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
      <br><br>
    </div>
  </div>
 </div>
  </div>

</body>
</html>
