<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Remove Student Data In Database.</h2>
</div>
<form action="removestudent.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Student ID:</label>
<input class="input" name="sid" type="text" value="">
<input class="submit" name="submit" type="submit" value="Remove"><input class="submit" type=button onClick="parent.location='index.php'" value='Home'>
</form>

<?php
$username = "root";
$password = "";
$database = "stducorp";
$mysqli = new mysqli("localhost", $username, $password, $database);
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['sid'];
if($id !=''){
$query = $mysqli -> query("delete from student where sid = '$id' ");
echo "<br/><br/><span>Data Erased successfully...!!</span>";
}
else{
echo "<p>Deletion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>
</div>
</div>

</body>
</html>