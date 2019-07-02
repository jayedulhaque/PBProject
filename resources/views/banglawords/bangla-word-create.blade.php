<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Audio File Create</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <style>
  .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; }
  .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
  .percent { position:absolute; display:inline-block; top:3px; left:48%; color: #7F98B2;}
</style>
</head>
<body>
  <div class="container">
    <div class="card">
          <div class="card-header"><h2>Audio File Create</h2><br/>
          </div>
    <form method="post" action="{{url('banglaword')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="BanglaWord">BanglaWord</label>
          <input type="text" class="form-control" name="BanglaWord">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Meaning">Meaning</label>
          <input type="text" class="form-control" name="Meaning">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="WordPronouciation">WordPronouciation</label>
          <input type="text" class="form-control" name="WordPronouciation">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <input id="poster" type="file" class="form-control" name="filename"><br>
          <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
          </div>
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

  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script>
  <script type="text/javascript">
    function validate(formData, jqForm, options) {
      var form = jqForm[0];
      if (!form.filename.value) {
        alert('File not found');
        return false;
      }
    }

    (function() {

      var bar = $('.bar');
      var percent = $('.percent');
      var status = $('#status');

      $('form').ajaxForm({
        beforeSubmit: validate,
        beforeSend: function() {
          status.empty();
          var percentVal = '0%';
          var posterValue = $('input[name=filename]').fieldValue();
          bar.width(percentVal)
          percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
          var percentVal = percentComplete + '%';
          bar.width(percentVal)
          percent.html(percentVal);
        },
        success: function() {
          var percentVal = 'Wait, Saving';
          bar.width(percentVal)
          percent.html(percentVal);
        },
        complete: function(xhr) {
          status.html(xhr.responseText);
          alert('Uploaded Successfully');
          window.location.href = "/banglaword";
        }
      });

    })();
  </script>
</body>
</html>