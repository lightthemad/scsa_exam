<link rel="stylesheet" href="/templates/css/bootstrap.min.css">
<script src="/templates/js/jquery.min.js"></script>
<script src="/templates/js/popper.min.js"></script>
<script src="/templates/js/bootstrap.min.js"></script>

<?php

//Include different libs according to requested URI
if($_SERVER["REQUEST_URI"] == "/")
{
    echo "<link rel='stylesheet' href='/templates/css/home.css'>";
}

if($_SERVER["REQUEST_URI"] == "/passtheexam")
{
    echo "<link rel='stylesheet' href='/templates/css/home.css'>";
}

?>
