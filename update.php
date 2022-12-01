<?php
include 'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM employee WHERE Id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['Id'];
$name = $row['Name'];
$email = $row['Email'];
$phone = $row['phone'];
$password = $row['password'];
$address = $row['Address'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  //  $dob=date('Y-m-d',strtotime($_POST['dateofbirth']));
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $sql = "UPDATE employee SET Id=$id,Name='$name',Email='$email',phone='$phone',password='$password',Address='$address' WHERE Id=$id";
  $result = mysqli_query($connection, $sql);
  if ($result) {
    echo '<script>alert("Your profile has been updated")</script>';
    echo '<script language="javascript">window.location = "display.php";</script>';
  } else {
    die("Query failed" . mysqli_error($connection));
  }

}


$connection->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Update</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap in php -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body style="  background: linear-gradient(to top left, #99ffcc 0%, #9999ff 100%); height: 100vh; ">
  <div class="container-fluid  ">
    <div class="col-sm-10">
      <!-- div container fluid and col-xs-4 is used only one time  -->
      <form method="post">
        <div class="container-fluid ">
          <h1 style="text-align:center; color:Black;">Employee Details Updation</h1>
        </div>
        <!-- <marquee class="blink" behaviour="scroll" width="100%"  direction="right" height="50px" scrollamount="7" >You can Register here</marquee> -->
    </div>
  </div>
  <div class="container-fluid my-5">
    <div class="col-sm-6">
      <form class="Register">

        <div class="form-group">
          <label for="Name"> Name </label><br>
          <input type="Text" id="Name" name="name" maxlength="20" class="form-control" value="<?php echo $name; ?>"
            placeholder="Enter your name" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="Email">Email</label><br>
          <input type="email" id="email" name="email" maxlength="40" class="form-control" value="<?php echo $email; ?>"
            placeholder="Enter your Mail id" autocomplete="off" />
        </div>


        <div class="form-group">
          <label for="Mobileno">PhoneNo</label><br>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" class="form-control"
            value="<?php echo $phone; ?>" placeholder="Enter your PhoneNumber" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="password">Password</label><br>
          <input type="text" id="password" name="password" maxlength="10" class="form-control"
            value="<?php echo $password; ?>" placeholder="Enter your password" autocomplete="off" />
        </div>
        <!-- <div class="form-group"> 
                                <label for="repassword">Re-type Password</label><br><input type="submit" onclick="alert('Your details are successfully saved')" value="Submit" >
                                <input type="password" id="password" name="password" maxlength="15" pattern="[A-Za-z][0-9][~!@#$%^&*()_.]"  placeholder="Enter your password again" required><br>
                            </div> -->

        <div class="form-group">
          <label for="Address">Address</label><br>
          <textarea rows="5" cols="80" name="address" class="form-control"
            placeholder="Enter your address here..."><?php echo $address; ?></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <button type="submit" name="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
  </form>
  </form>

</body>

</html>