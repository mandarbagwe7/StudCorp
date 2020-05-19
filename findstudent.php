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
<form action="findstudent.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Student Name:</label>
<input class="input" name="name" type="text" value="">
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
<input class="submit" name="submit" type="submit" value="Find"><input class="submit" type=button onClick="parent.location='index.php'" value='Home'>
</form>

                <?php
                $username = "root";
                $password = "";
                $database = "stducorp";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
                $name = $_POST['name'];
                $department = $_POST['department'];
                $class = $_POST['class'];
                $query = "SELECT s.sid,s.sname,s.sgender,s.saddress,d.dname,c.cname,class.classname FROM student s inner join courses c on c.cid=s.cid inner join department d on s.did = d.did inner join class on s.classid = class.classid where s.did = '". $department. "', s.classid = '".$class."'";


                echo '<table border="0" cellspacing="2" cellpadding="2">
                      <tr>
                          <td> <font face="Arial">Student ID</font> </td>
                          <td> <font face="Arial">Student Name</font> </td>
                          <td> <font face="Arial">Gender</font> </td>
                          <td> <font face="Arial">Address</font> </td>
                          <td> <font face="Arial">Department</font> </td>
                          <td> <font face="Arial">Course</font> </td>
                          <td> <font face="Arial">Class</font> </td>
                      </tr>';

                if ($result = $mysqli -> query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["sid"];
                        $field2name = $row["sname"];
                        $field3name = $row["sgender"];
                        $field4name = $row["saddress"];
                        $field5name = $row["dname"];
                        $field6name = $row["cname"];
                        $field7name = $row["classname"];

                        echo '<tr>
                                  <td>'.$field1name.'</td>
                                  <td>'.$field2name.'</td>
                                  <td>'.$field3name.'</td>
                                  <td>'.$field4name.'</td>
                                  <td>'.$field5name.'</td>
                                  <td>'.$field6name.'</td>
                                  <td>'.$field7name.'</td>
                              </tr>';
                    }
                    $result->free();
                }

}
?>
</div>
</div>

</body>
</html>