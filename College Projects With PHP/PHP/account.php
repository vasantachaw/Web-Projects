<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "login";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
  die("UnSuccessfully connected." . mysqli_connect_errno());
}
else {
  $sql = "select first_name,last_name,users,user_email,passwords,confirm_passwords from admin";
  if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {

      echo "<table cellspacing='10' cellpadding='10'";
      echo "<tr>";
      echo "<th>first name</th>";
      echo "<th>last name</th>";
      echo "<th>user</th>";
      echo "<th>email Id</th>";
      echo "<th>password</th>";
      echo "<th>re password</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['users'] . "</td>";
        echo "<td>" . $row['user_email'] . "</td>";
        echo "<td>" . $row['passwords'] . "</td>";
        echo "<td>" . $row['confirm_passwords'] . "</td>";
        echo "</tr>";
        
      }
      echo "</table>";
    // Free result set
    //  mysqli_free_result($result);
    }
    else {
      echo "No records matching your query were found.";
    }
  }
  else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
// Close connection
mysqli_close($conn);
?>
</body>

</html>