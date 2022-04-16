<?php

function isinstalled()
{

// Connect to the DB
include_once root . "/logic/native/dbconnect.php";

return True;

//close the DB connection
require_once root . "/logic/native/dbclose.php";

}
