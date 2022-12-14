<?php require_once("header.php"); ?>
<h1>Instructors</h1>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Instructor ID</th>
      <th>Instructor Name</th>
      <th>Course ID</th>
      <th>Section ID</th>
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

$sql = "SELECT instructorID, instructorName, courseID, sectionID FROM instructor";
$result = $conn->query($sql);
       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>              
                  <td scope="row">' . $row["instructorID"]. '</td>
                  <td>' . $row["instructorName"] .'</td>
                  <td>' . $row["courseID"] .'</td>
                  <td>' . $row["sectionID"] .'</td>
                  <td>
      <form method="post" action="instructorstudent.php">
        <input type="hidden" name="id" value="<?=$row["courseID"]?>" />
        <input type="submit" value="Students" />
      </form>
    </td>
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


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Instructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Add Instructor</h1>
<form method="post" action="instructor-save.php">
  <div class="mb-3">
    <label for="instructorName" class="form-label">Name</label>
    <input type="text" class="form-control" id="instructorName" aria-describedby="nameHelp" name="iName">
    <div id="nameHelp" class="form-text">Enter the instructor's name.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

