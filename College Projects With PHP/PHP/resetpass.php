<?php
if (isset($_POST['next'])) {

  $user_email = $_POST['email'];
  $server_name = "localhost";
  $user = "root";
  $password = "";
  $database = "login";
  $conn = mysqli_connect($server_name, $user, $password, $database);
  if (!$conn) {
    print("<script> alert('Unsuccessfully Connection !')");
  }
  else {
    $sql = "select user_email from admin where user_email='$user_email'";
    $result = mysqli_query($conn, $sql) or die("<script> alert('Query Invalid !')</script>");
    if (mysqli_num_rows($result) > 0) {

      print("<script> window.location.href = 'http://localhost/dream/changepass.php';</script>");
      print("<script>alert('Successfully !');</script>");

    }
    else {
      print("<script>alert('Invalid Email ID !');</script>");
      print("<script> window.location.href = 'http://localhost/dream/resetpass.php';</script>");
    }
  }
  mysqli_close($conn);
}
?>