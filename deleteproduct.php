<?php
$con=mysqli_connect("localhost","root","","mst");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:".mysqli_connect_error();
}
$sql="SELECT * from PRODUCT";
$result=mysqli_query($con,$sql);

?>

<table class="table" >
       <tr>
       <th> ID</th>
       <th> Title </th>
       <th> Category </th>
       <th> Brand </th>
       <th> Image </th>
       <th> Price </th>
       <th> Description </th>

       </tr>   

       <?php
while($pro = mysqli_fetch_assoc($result)){

echo "<tr>";
#echo "<td><input type='button' onclick='delete.php?id=".$pro['id']."' value='.$pro["id"].'</td>";
#echo "<td><button name='$pro["id"]'</button></td>";
echo '<td><input type="submit" value=Delete&nbsp;'.$pro["id"]. '></td>';
echo "<td><a href='delete.php?id=".$pro['id']."'>".$pro['id']."</td>";
echo "<td>".$pro['title']."</td>";
echo "<td>".$pro['category']."</td>";
echo "<td>".$pro['brand']."</td>";
#echo '<td><img href="$pro['image']"></td>';
echo "<td>".$pro['price']."</td>";
echo "<td>".$pro['description']."</td>";
#echo "<td><a href='delete.php?id=".$book['Staff_ID']."'></a></td>"; //if you want to delete based on staff_id
echo "</tr>";
}// end while loop
?>