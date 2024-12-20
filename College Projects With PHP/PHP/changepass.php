<?php
if (isset($_POST['changing'])) {

    $user_password = $_POST['password'];
    $user_confirmpasswords = $_POST['confirmpassword'];
    $server_name = "localhost";
    $user = "root";
    $password = "";
    $database = "login";
    $conn = mysqli_connect($server_name, $user, $password, $database);
    if (!$conn) {
        print("<script> alert('Unsuccessfully Connection !')");
    }
    else {
        $sql = " update admin set passwords='$user_password',confirm_passwords= '$user_confirmpasswords' where id=1 ";
        if (mysqli_query($conn, $sql)) {
            print("<script> window.location.href = 'http://localhost/dream/login.php';</script>");
            print("<script> alert('Successfully sumbit !')</scrip>)");

        }
        else {
            print("<script> window.location.href = 'http://localhost/dream/resetpass.php';</script>");
            print("<script> alert('Unsuccessfully sumbit !')</scrip>)");

        }
    }
    mysqli_close($conn);
}
?>