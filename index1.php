<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Course ID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>Description</th>
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

$sql = "SELECT courseID, coursePrefix, courseNumber, courseDescription FROM course";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
<tr>
  <td><?=$row["courseID"]?></td>
  <td><?=$row["prefix"]?></td>
  <td><?=$row["number"]?></td>
  <td><?=$row["description"]?></td>
     <td>
      <form method="post" action="postFilter.php">
        <input type="hidden" name="id" value="<?=$row["prefix"]?>" />
        <input type="submit" value="Chosen Prefix" />
      </form>
    </td>
</tr>

        echo '<tr>              
                  <td scope="row">' . $row["courseID"]. '</td>
                  <td>' . $row["coursePrefix"] .'</td>
                  <td> '.$row["courseNumber"] .'</td>
                  <td> '.$row["courseDescription"] .'</td>
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
