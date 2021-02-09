<!DOCTYPE HTML>  
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
  
  
  <input type="checkbox" id="ssc" name="ssc" value="ssc">
  <label for="ssc"> SSC</label>
  <input type="checkbox" id="hsc" name="ssc" value="ssc">
  <label for="hsc">HSC</label>
  <input type="checkbox" id="bsc" name="bsc" value="bsc">
  <label for="bsc"> BSC</label>
  <input type="checkbox" id="bsc" name="bsc" value="bsc">
  <label for="bsc"> MSc</label>
  <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";

echo $degree;
?>

</body>
</html>