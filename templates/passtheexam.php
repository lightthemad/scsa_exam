<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pass IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once "libs.php"; ?>
  
</head>
<body id="main" class="d-flex vh-100 align-items-center justify-content-center">


         <div id="login" class="wrapper m-5 p-5 rounded" style="background-color: rgba(230, 230, 230, 0.6);">
                <div class="form-group">
                     <form action="send" method="post">
                     <label>Enter Your Name and Surname</label>
                     <input type="text" id="name" name="name" class="form-control">
                     <input class="btn btn-primary" type="submit" value="Send it and finish the exam">
                </div>
         </div>

</body>
</html>
