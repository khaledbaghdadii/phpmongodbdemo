<?php include('templates/header.php'); ?>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center mt-2">
    <h3>Register a Book</h1>
    </div>
    <div class="row d-flex justify-content-center mt-3">
    <form action="form_processor.php" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  placeholder="Title" name="title">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author"  placeholder="Author" name="author">
  </div>
  <div class="form-group">
    <label for="author">Number of Pages</label>
    <input type="text" class="form-control" id="nbOfPages"  placeholder="Number of Pages" name="nbOfPages">
  </div>
  <div class="form-group">
    <label for="Year of Publication">Year of Publication</label>
    <input type="text" class="form-control" id="yearOfPublication"  placeholder="Year of Publication" name="yearOfPublication">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="add">Add</button>
  </div>
</form>
</div>
</div>
</body>
</html>