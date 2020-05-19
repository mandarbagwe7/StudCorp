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
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Student Name:</label>
<input class="input" name="name" type="text" value="">
<label>Gender:</label>
<select class="input" id="gender" name="gender">
  <option value="M">Male</option>
  <option value="F">Female</option>
</select>
<label>Address:</label>
<textarea cols="25" name="address" rows="5"></textarea><br>
<label>Department:</label>
<select class="input" id="department" name="department">
  <option value="1">Computer Engineering</option>
  <option value="2">Information Technology</option>
  <option value="3">Electronics & Telecommunication</option>
</select>
<label>Course:</label>
<select class="input" id="course" name="course">
  <option value="1">Computer Engineering</option>
  <option value="2">Information Technology Engineering</option>
  <option value="3">Electronics & Telecommunication Engineering</option>
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
$gender = $_POST['gender'];
$address = $_POST['address'];
$department = $_POST['department'];
$course = $_POST['course'];
$class = $_POST['class'];
if(($name !=''|| $department !='') || (($gender !=''|| $course !='') || $class !='')){
$query = $mysqli -> query("insert into student(sname, sgender, saddress, did, cid, classid) values ('$name', '$gender', '$address', '$department', '$course', '$class')");
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