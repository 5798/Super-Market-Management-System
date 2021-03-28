<?php
$con=mysqli_connect("localhost","root","","mst");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:".mysqli_connect_error();
}
$sql="SELECT * from user";
$result=mysqli_query($con,$sql);

?>
<body bgcolor='#00FFFF'>
  <br>
<table class="table" >
       <tr>
       <th> ID</th>
       <th> FNAME </th>
       <th> LNAME </th>
       <th> AGE </th>
       <th> MOBILE NUM </th>

       </tr>   

       <?php
while($pro = mysqli_fetch_assoc($result)){

echo "<tr>";
echo '<td><input type="submit" value=Delete&nbsp;'.$pro["id"]. '></td>';
echo "<td><a href='deleteu.php?id=".$pro['id']."'>".$pro['id']."</td>";
echo "<td>".$pro['fname']."</td>";
echo "<td>".$pro['lname']."</td>";
echo "<td>".$pro['age']."</td>";
echo "<td>".$pro['mobile']."</td>";
echo "</tr>";
}// end while loop
?>
<html>
<body>
<a href="head.php"><button>GOTO HOME</button></a>
<br><br>
</body>
</html>