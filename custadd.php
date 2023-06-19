<?php
// assign data from customer form into variable
$cid=$_POST['fcustid'];
$cname=$_POST['fcustname'];

// Connection to the server and datbase
$dbc = mysqli_connect ("localhost","root","","sales");
 if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
     }	

// SQL statement  to insert data from form into table customer
$sql="insert into `customer`(`Custid`,`Custname`) values ('$cid','$cname')";

$results= mysqli_query($dbc,$sql); 

if ($results)
{
	mysqli_commit($dbc);
               //display message box Record Been Added
	print '<script>alert("Record Had Been Added");</script>';
              //go to frmcustomer.php page
	print '<script>window.location.assign("frmcustomer.php");</script>'; 
	
}
else
 { 	mysqli_rollback($dbc); 
               //display error message box
	print '<script>alert("Data Is Invalid , No Record Been Added");</script>'; 
              //go to frmcustomer.php page
	print '<script>window.location.assign("frmcustomer.php");</script>'; 
	}
?>
