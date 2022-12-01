<?php
$connection = mysqli_connect('localhost', 'root', '', 'registration_web');
if (!$connection) {
   die("OOPS!! CONNECTION FAILED!" . mysqli_connect_error());
}

// <!-- if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
// 

//     <!--  //  <td> <button type="submit" name="update" class="btn btn-primary"><a href="update.php?updateid='.$Id.'" class="text-light">Update</a></button>
//     //  <button type="submit" name="Delete" class="btn btn-danger"><a href="delete.php?id='.$Id.'" 
//     <td> <button type="submit" name="update" class="btn btn-primary"><a href="update.php?updateid='.$Id.'" class="text-light">Update</a></button>
//       <button type="submit" name="Delete" class="btn btn-danger"><a href="delete.php?id='.$Id.'" <?php  class="text-light">Delete</a></button>
//      </td>
//echo"<td> <a href=\"delete.php?id='.$Id.' \" onClick=\"return confirm('Are you sure you want to delete?')\"><button  type='button' class='button'value=''>Delete</button></a></td>";
//     //  </td> -->
//<button type="submit" name="update" class="btn btn-primary"><a href="update.php?updateid='.$Id.'" class="text-light">Update</a></button>
?>