<?php
include "connection.php";
//include "Employeeregister.php";
if (isset($_POST['login'])) {
    extract($_REQUEST);
    // $sql= mysqli_query($connection,"SELECT * FROM employee where Email = '$Email' && password= '$password'");
    // $result = mysqli_query($connection,$sql);
    $sql = "SELECT * FROM employee where Email = '$Email' && password= '$password'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_fetch_assoc($result) == true) {
        echo '<script language="javascript">alert("Login successfull!");</script>';
        echo '<script language="javascript">window.location = "display.php";</script>';


    } else {
        echo '<script language="javascript">alert("Check your credentials correctly!");</script>';
        echo "<a href='login.php'></a>";
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login page</title>
    <marquee class="blink" behaviour="scroll" width="100%" direction="right" height="30px" scrollamount="7"
        href="login.css">You can login here</marquee>

</head>

<body>
    <div class="d-flex align-items-center light-blue-gradient" style="height: 100vh;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card rounded-0 shadow">
                        <div class="card-body">
                            <h3>Sign In</h3>

                            <form method="post">

                                <div class="form-group">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" class="form-control" id="inputemail" name="Email"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Enter valid email address</small>
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="form-group">
                                    <a href="Employeeregister.php" target=_self>New user? Register Here</a>
                                </div>

                                <button type="submit" name="login" class="btn btn-primary">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

</body>

</html>