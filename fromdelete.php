<!DOCTYPE html>
<html>
<head>
  <title>Delete Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="utf-8">
</head>
<body>
  <form action = "delete.php" method = "post" id="CommentForm" >
    <div class="form-group">
      <label for="pwd">Name want to delete:</label>
      <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
      <input type="submit" id="commentBtn">
    </div>
  </form> 
</body>
</html>