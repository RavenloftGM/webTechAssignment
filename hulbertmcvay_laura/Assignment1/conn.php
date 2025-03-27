<?php $connection = mysqli_connect("localhost", "llhulbert-mcvay", "HTbnQ3rjPg", "llhulbert-mcvay");

// Check connection
if (mysqli_connect_errno())
{
echo "Could not connect to database: " . mysqli_connect_error();
}//end if
return $connection;
?>