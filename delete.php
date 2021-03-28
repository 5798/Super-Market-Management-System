<?php
$con=mysqli_connect("localhost","root","","mst");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:".mysqli_connect_error();
}

else
{
if (isset($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
$sql="DELETE FROM product WHERE id=$id";
$result = mysqli_query($con,$sql);
header("Location:deleteproduct.php");



// redirect back to the view page

#header("Location: view.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

#header("Location: view.php");

}


}
?>