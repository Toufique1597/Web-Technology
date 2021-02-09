<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dergeeErr = $websiteErr = "";
$name = $email = $degree = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  
  <label for="blood group">Blood Group:</label>
  <select name="b" id="b">
      <option value="b"></option>
      <option value="saab">O+</option>
	  <option value="a">A+</option>
      <option value="b">B+</option>
	  <option value="a">AB+</option>
      <option value="b">AB-</option>
	  <option value="a">O-</option>
      <option value="b">B-</option>
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $degree;
?>

</body>
</html>