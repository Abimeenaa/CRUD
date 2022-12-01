<?php
include 'connection.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
 
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($address)) {
    
    echo '<script language="javascript">alert("All fields are required. Either one or many fields looks empty");</script>';
    echo "<a href='Employeeregister.php'><h3>Go back</h3></a>";
  } else {
    $sql = "INSERT INTO employee(name,email,phone,password,address) VALUES('$name','$email','$phone','$password','$address')";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
      die("Query failed" . mysqli_error($connection));
    } else {
      echo '<script language="javascript">alert("Your data has been registered successfully!");</script>';
      echo '<script language="javascript">window.location = "login.php";</script>';
      echo "<br/>";
    }
    $connection->close();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign-up</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body style="  background: linear-gradient(to top left, #99ffcc 0%, #9999ff 100%); height: 100vh; ">  
      <form action="Employeeregister.php" method="post">
        <div class="container-fluid ">
          <h1 style="text-align:center; color:Black;">Employee Registration Form</h1>
        </div>
    <div class="col-sm-10">
        <div class="form-group">
          <label for="Name"> Name </label><br>
          <input type="Text" id="Name" name="name" maxlength="20" class="form-control" background-color:#000
            placeholder="Enter your name" autocomplete="off" required />
        </div>

        <div class="form-group">
          <label for="Email">Email</label><br>
          <input type="email" id="email" name="email" maxlength="40" class="form-control"
            placeholder="Enter your Mail id" autocomplete="off" required />
        </div>

        <div class="form-group">
          <label for="Dateofbirth">DOB</label><br>
          <input type="date" id="dob" name="dateofbirth" maxlength="50" class="form-control"
            placeholder="Enter your DOB" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="Gender">Gender</label><br>

          <input type="radio" id="gender" name="radio" value="Male" />
            <label for="radio">Male</label>
          <input type="radio" id="gender" name="radio" value="Female" />
          <label for="radio">Female </label>
          <input type="radio" id="gender" name="radio" value="other" />
          <label for="radio">Other</label>
        </div>

        <div class="form-group">
          <label for="Mobileno">PhoneNo</label><br>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" class="form-control"
            placeholder="Enter your PhoneNumber" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="password">Password</label><br>
          <input type="password" id="password" name="password" maxlength="10" class="form-control"
            placeholder="Enter your password" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="Address">Address</label><br>
          <textarea rows="5" cols="80" name="address" class="form-control"
            placeholder="Enter your address here..."></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="submit" name="reset" class="btn btn-danger"> Reset</button>
    </div>
  </div>
  </form>
  </form>

</body>

</html>
