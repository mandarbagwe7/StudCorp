<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>StudCorp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header_wrapper">
  <div id="header">
    <div id="site_title">
      <h1><a href="index.php"><img src="images/logo.png" alt="logo" /></a></h1>
    </div>
    <p>StudCorp is a fully computerized system or a database where all the student related data can be stored, retrieved, monitored & analyzed.</p>
  </div>
  <!-- end of header -->
</div>
<!-- end of menu_wrapper -->
<div id="menu_wrapper">
  <div id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="student.php">Student</a></li>
      <li><a href="staff.php">Staff</a></li>
      <li><a href="department.php" class="current">Department</a></li>
      <li><a href="class.php">Class</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  <!-- end of menu -->
</div>
<div id="content_wrapper">
  <div id="sidebar">
    <div class="sidebar_box">
      <h2>Departments:</h2>
      <div class="news_box"> <a href="#">Computer</a></div>
      <div class="news_box"> <a href="#">Information Technology</a></div>
      <div class="news_box"> <a href="#">Electronics & Telecommunication</a></div>
    </div>
<!--    <div class="sidebar_box_bottom"></div>-->
<!--    <div class="sidebar_box">-->
<!--      <h2>XIE Samachar</h2>-->
<!--      <form action="#" method="get">-->
<!--        <label>Please enter your email address to subscribe our newsletter 'Samachar'.</label>-->
<!--        <input type="text" value="" name="username" size="10" id="input_field" />-->
<!--        <input type="submit" name="login" value="Subscribe" alt="login" id="submit_btn" />-->
<!--      </form>-->
<!--      <div class="cleaner"></div>-->
<!--    </div>-->
    <div class="sidebar_box_bottom"></div>

  </div>
  <!-- end of sidebar -->

  <div id="content">

    <div class="content_box">
      <h2>Staff From Department:</h2>
        <?php
                $username = "root";
                $password = "";
                $database = "stducorp";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT * FROM department";


                echo '<table border="0" cellspacing="2" cellpadding="2">
                      <tr>
                          <td> <font face="Arial">Department ID</font> </td>
                          <td> <font face="Arial">Department Name</font> </td>
                      </tr>';

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["did"];
                        $field2name = $row["dname"];

                        echo '<tr>
                                  <td>'.$field1name.'</td>
                                  <td>'.$field2name.'</td>
                              </tr>';
                    }
                    $result->free();
                }
                ?>
      <div class="cleaner_h20">

      </div>
      <div class="section_w250 float_r">

      </div>
      <div class="cleaner">

      </div>
    </div>
<!--    <div class="content_box_bottom"></div>-->
<!--    <div class="content_box">-->
<!--      <h2>Important Notice</h2>-->
<!--      <div class="section_w250 float_l">-->
<!--        <h3>Ramu Watchman</h3>-->
<!--        <p>Beta, ID Card Kidar hai?</p>-->
<!--      </div>-->
<!--      <div class="section_w250 float_r">-->
<!--        <h3>Dev Manus</h3>-->
<!--        <p>Sign the attendance and Do whatever you want.</p>-->
      </div>
      <div class="cleaner"></div>
    </div>
<!--    <div class="content_box_bottom"></div>-->
<!--  </div>-->
  <!-- end of content -->
  <div class="cleaner"></div>
</div>


<div class="content">

</body>
</html>
