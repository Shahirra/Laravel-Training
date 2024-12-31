<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$page}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <a href="javascript:history.back()" class="btn btn-primary" style="margin-top:30px;">Back</a>
  <h2>Information about "{{$book['title']}}" book</h2>
  <ul class="list-group">
    <label>title:</label>
    <li class="list-group-item list-group-item-success">{{$book['title']}}</li>
    <label>price:</label>
    <li class="list-group-item list-group-item-info">{{$book['price']}}</li>
    <label>description:</label>
    <li class="list-group-item list-group-item-warning">{{$book['description']}}</li>
    <label>picture:</label>
    <li class="list-group-item list-group-item-danger">{{$book['pic']}}</li>
  </ul>
</div>

</body>
</html>
