<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Grade Level</th>
      <th>Course ID</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername = "localhost";
$username = "ngoralou_homework3";
$password = "Createou!";
$dbname = "ngoralou_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT studentID, studentName, gradeLevel, courseID FROM student";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>              
                  <td scope="row">' . $row["studentID"]. '</td>
                  <td>' . $row["studentName"] .'</td>
                  <td> '.$row["gradeLevel"] .'</td>
                  <td> '.$row["courseID"] .'</td>
                   <br>                
                </tr>';
    }
} else {
    echo "0 results";
} 
?>
       </tbody>    
      </table>
    </div>
</table>
