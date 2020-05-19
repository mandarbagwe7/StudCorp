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
<h2>Insert Instructor Data In Database.</h2>
</div>
<form action="insertstaff.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Instructor Name:</label>
<input class="input" name="name" type="text" value="">
<label>Post:</label>
<input class="input" name="post" type="text" value="">
<label>Department:</label>
<select class="input" id="department" name="department">
  <option value="1">Computer Engineering</option>
  <option value="2">Information Technology</option>
  <option value="3">Electronics & Telecommunication</option>
</select>
<label>Class:</label>
<select class="input" id="class" name="class">
  <option value="1">SE Computer</option>
  <option value="2">SE Information Technology</option>
  <option value="3">SE Electronics & Telecommunication</option>
  <option value="4">TE Computer</option>
  <option value="5">TE Information Technology</option>
  <option value="6">TE Electronics & Telecommunication</option>
</select>
<input class="submit" name="submit" type="submit" value="Insert"><input class="submit" type=button onClick="parent.location='index.php'" value='Home'>
</form>

<?php
$username = "root";
$password = "";
$database = "stducorp";
$mysqli = new mysqli("localhost", $username, $password, $database);
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$post = $_POST['post'];
$department = $_POST['department'];
$class = $_POST['class'];
if(($name !=''|| $department !='') || (($gender !=''|| $course !='') || $class !='')){
$query = $mysqli -> query("insert into instructor(iname, ipost, did, classid) values ('$name', '$post', '$department', '$class')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
?>
</div>
</div>

</body>
</html>