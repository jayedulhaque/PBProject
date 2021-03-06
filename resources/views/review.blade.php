<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Review</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>
<body>
  <div class="container">
    <h2>Add a Review</h2><br/>
    <form method="post" action="{{url('review')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="commentor_name">Name</label>
          <input type="text" class="form-control" name="commentor_name">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="commentor_designation">Designation</label>
          <input type="text" class="form-control" name="commentor_designation">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="commentor_comments">Comments</label>
          <textarea class="form-control" name="commentor_comments" rows="8" cols="50"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:30px">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>

</body>
</html>