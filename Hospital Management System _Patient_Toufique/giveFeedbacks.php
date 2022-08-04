<?php
session_start();
if ($_SESSION['user'] == '') {
    header("Location: login.php");
}

        require_once 'controller/giveFeedbacks.php';
		$message = '';
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Dashbord</title>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="assets/logo.png" width="120" height="120">
            </div>
            <div class="col-sm nav justify-content-end align-self-center">
                <a class="nav-link" href="dashbord.php?flag=dashbord">Welcome <?php echo $_SESSION["user"] ?></a>
                <a class="nav-link" href="login.php?flag='logout">Log out</a>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <legend>Account</legend>
                <hr>
                <div class="list-group" id="list-tab">
                    <a class="list-group-item list-group-item-action" href="dashbord.php">Dashbord</a>
                    <a class="list-group-item list-group-item-action" href="accountViewProfile.php">View profile</a>
                    <a class="list-group-item list-group-item-action" href="editProfile.php">Edit profile</a>
                   
                    <a class="list-group-item list-group-item-action" href="changePassword.php">Change password</a>
					<a class="list-group-item list-group-item-action" href="bookAppointment.php" >Book Appoinment</a>
					<a class="list-group-item list-group-item-action" href="searchDoctor.php" >Search Doctor </a>
					<a class="list-group-item list-group-item-action" href="SeePrescribtion.php" >See Your Prescription</a>
					<a class="list-group-item list-group-item-action" href="giveFeedbacks.php" >Give Your Feedbacks</a>
                </div>
            </div>
             <div class="col-9">
                <div class="container">
                    <div class="row">
                        <legend>Give Your Feedbacks </legend>
                    </div>
                   <form method="POST" action="giveFeedbacks.php">
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                           <textarea id="feedbacks" name="feedbacks" rows="4" cols="50">
 
                            </textarea>
                        </div>
						</br>
						</br>
                       
                        
						
                        <div class="row">
                            <button type="submit" name="submit" value="submit" id="submit"  class="btn btn-primary">Submit</button>
                        </div>
                        <br>
						</br>
                       
        </div>
	        	</form>
    </div>
	
	<script>
document.getElementById("submit").addEventListener("click", myFunction);

function myFunction() {
  alert ("Thanks For Your Feedback");
}
</script>

</body>

</html>