<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Captcha</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
    <style>

        body {
            padding-top: 54px;
            }

        @media (min-width: 992px) {
            body {
            padding-top: 56px;
                }
            }
 </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.png" width="150" height="30" alt="staybusy logo">
        </a>
        
        
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <h1 class="mt-5">Stay-Busy Captcha</h1>
        <div class="">
        <form action="validate.php" method="post">
          <p>Are you a robot ?</p>
           <br>
            <label> <p>if no , Enter the code below.</p> </label>
             <br>
            <img src='Captcha.php' style='border: 0;'>
            <br>
            <input type="text" name="text"  autocomplete='off' required>
            <button type="submit" name="submit">Submit </button>
            <p>Confused? Refresh <span><a href="">here</a></span></p>
        </form>
        </div>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    
  </body>

</html>
