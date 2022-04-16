<?php

// Check if the database is set up correctly
include_once root . "/logic/native/isinstalled.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KUBDARI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once "libs.php"; ?>
  
</head>
<body id="main" class="d-flex vh-100 align-items-center justify-content-center">


         <div id="login" class="wrapper m-5 p-5 rounded" style="background-color: rgba(230, 230, 230, 0.6);">
                    <h2>Do you want to pass?</h2>

                        <div class="form-group">
                            <?php if(isinstalled()==True) echo("<a class='btn btn-primary' href='/passtheexam'>SURE!</a>"); ?>
                            <br></br>
                        </div>

         </div>

</body>
</html>
