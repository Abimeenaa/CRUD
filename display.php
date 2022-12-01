<?php
include "connection.php"
  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="register.css"> -->
  <title>Display page</title>
  <!-- <marquee class="blink" behaviour="scroll" width="100%"  direction="right" height="30px" scrollamount="7" href="login.css" >You can login here</marquee> -->
</head>

<body style=" background: linear-gradient(to top left, #99ffcc 0%, #9999ff 100%); height: 100vh; ">
  <!-- <div class="d-flex align-items-center height:100vh;"> -->
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <div class="col-sm-10">
        <caption>
          <legend style="text-align:center">List of Employee details</legend>
        </caption>

        <table class="table table-striped table-hover table-bordered">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobileno</th>
              <th scope="col">Password</th>
              <th scope="col">Address</th>
              <th scope="col" style="text-align:center" colspan="2">Operations</th>
            </tr>
          </thead>
          <tbody>
            <?php
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($connection, $sql);
    if ($result) {
      while ($row = mysqli_fetch_array($result)) {
        $Id = $row['Id'];
        $Name = $row['Name'];
        $Email = $row['Email'];
        $phone = $row['phone'];
        $password = $row['password'];
        $address = $row['Address'];

        echo '<tr>
      <th scope="row">' . $Id . '</th>
      <td>' . $Name . '</td>
      <td>' . $Email . '</td>
      <td>' . $phone . '</td>
      <td>' . $password . '</td>
      <td>' . $address . '</td>
      
     <td> <button type="submit" name="update" class="btn btn-primary"><a href="update.php?updateid=' . $Id . '" class="text-light">Update</a></button>
     <button  type="submit" name="Delete" class="btn btn-danger"><a href="delete.php?id=' . $Id . '" class="text-light">Delete</a></button>
     </td>
    </tr>';

      }
    }
    ?>
          </tbody>
        </table>
        <button type="submit" name="Adduser" class="btn btn-primary my-5"><a href="Employee.php" class="text-light">Add
            User</button>
      </div>
    </div>
  </div>
  </div>
</body>

</html>