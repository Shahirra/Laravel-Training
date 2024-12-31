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

    .book-list th {
      background-color: #f8f8f8;
      font-weight: bold;
      text-align: center;
      vertical-align: middle;
    }

    .book-list td {
      text-align: center;
      vertical-align: middle;
    }

    .book-list .btn {
      margin-top: 5px;
    }

    /* Custom Styles */
    .book-list .btn-group {
        display: flex;
    }

    .book-list .btn-group .btn {
        margin-right: 5px;
    }
    .center{
    margin-left: 700px;

    }

    .pagination {
      justify-content: center;
      margin-top: 20px;
    }

    .no-books {
      text-align: center;
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
      <div class="col-md-3">
        <br><br><br><br><br><br>
        <div class="list-group">
          <a href="#" class="list-group-item active">Menu</a>
          <a href="{{ route('books.index') }}" class="list-group-item">Books</a>
          <a href="{{ route('create-book') }}" class="list-group-item">Create Book</a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="page-header">
          <h1>Books</h1>
        </div>
        @if ($books)
          <table class="table table-striped table-bordered book-list">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Picture</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $index => $book)
                <tr>
                  <td>{{ $book['id'] }}</td>
                  <td>{{ $book['title'] }}</td>
                  <td>{{ $book['price'] }}</td>
                  <td>{{ $book['description'] }}</td>
                  <td><img src="{{ $book['pic'] }}" alt="Book Picture" width="150px"></td>
                  <td>
                    <div class="btn-group" role="group">
                        <form action="{{ route('books.destroy', $book['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">
                            <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>

                        <form action="{{ route('books.edit', $book['id']) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                            </button>
                        </form>

                        <form action="{{ route('books.show', $book['id']) }}" method="GET" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-info">
                            <i class="fas fa-info-circle"></i> View
                            </button>
                        </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <div class="no-books">
            <p>No books found.</p>
          </div>
        @endif

        <div class="pagination">
          {{ $books->links() }}
        </div>
      </div>
    </div>
  </div>

</body>
</html>
