<?php
if(isset($_POST['submiting'])){
    $user_name=$_POST['user'];
    $user_password=$_POST['password'];
    $server_name="localhost";
    $user="root";
    $password="";
    $confirmpassword=$_POST['confirmpassword'];
    $database="login";
    $conn=mysqli_connect($server_name,$user,$password,$database);
    if(!$conn){
        print("<script> alert('Unsuccessfully Connection !')");
    }else{
        $sql="select users,passwords,confirm_passwords from admin where users='$user_name' AND passwords='$user_password' AND confirm_passwords='$confirmpassword'";
        $result=mysqli_query($conn,$sql) or die("<script> alert('Query Invalid !')</script>");
        if(mysqli_num_rows($result)>0){

          print("<script> window.location.href='http://localhost/dream/account.php';</script>");
          print("<script>alert('Successfully !');</script>");
         
        }else{
            print("<script>alert('User && Password are Invalid !');</script>");
            print("<script> window.location.href='http://localhost/dream/resetpass.php';</script>");
        }
    }
    mysqli_close($conn);
}
?>