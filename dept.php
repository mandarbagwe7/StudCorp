 
<html>
<body> 
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
                
                </body>
</html>




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




                <div id="footer_wrapper">
  <div id="footer">
    <ul class="footer_menu">
      <li><a href="index.html">Home</a></li>
      <li><a href="student.html">Student</a></li>
      <li><a href="staff.html">Staff</a></li>
      <li><a href="department.html">Department</a></li>
      <li><a href="class.html" class="current">Class</a></li>
      <li class="last_menu"><a href="contact.html">Contact Us</a></li>
    </ul>
    Copyright &copy; 2048 <a href="#">Khairnars</a> | Designed by Sanjana Khairnar</div>
</div>