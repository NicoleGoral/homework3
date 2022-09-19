<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

<?php
$servername = "localhost";
$username = "ngoralou_Hwk3";
$password = "Happygilmore1!";
$dbname = "ngoralou_MainDatabase";

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
    </div>
</table>
