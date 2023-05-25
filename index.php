<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">		
	<div class="row">
		<div class="col-md-6 offset-md-3">
      <h2>User Login:</h2>
      
      <form method="post" id="comment_form">
        <div class="mb-3">
          <label>Enter Subject</label>
          <input type="text" name="subject" id="subject" class="form-control">
        </div>
        <div class="mb-3">
          <label>Enter Comment</label>
          <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
        </div>
      </form>
      <div id="alert_popover">
        <div class="wrapper">
          <div class="content">

          </div>
        </div>
      </div>
		</div>
	</div>
</div>	
  
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="Js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>