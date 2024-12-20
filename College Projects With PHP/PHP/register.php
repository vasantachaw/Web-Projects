<?php
if(isset($_POST['submiting'])){
    $user_name=$_POST['user'];
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $email=$_POST['email'];
    $user_password=$_POST['password'];
    $user_confirmpasswords=$_POST['confirmpassword'];
    $server_name="localhost";
    $user="root";
    $password="";
    $database="login";
    $conn=mysqli_connect($server_name,$user,$password,$database);
    if(!$conn){
        print("<script> alert('Unsuccessfully Connection !')");
    }else{
        $sql="
        insert into admin (
        first_name,last_name,users,user_email,passwords,confirm_passwords)
        values
        ('$first_name','$last_name','$user_name','$email','$user_password','$user_confirmpasswords')";
        if(mysqli_query($conn,$sql)){
          print("<script> window.location.href = 'http://localhost/dream/login.php';</script>");
            print("<script> alert('Successfully sumbit !')</scrip>)");
        }else{
            print("<script> alert('Unsuccessfully sumbit !')</scrip>)");
            print("<script> window.location.href = 'http://localhost/dream/register.php';</script>");
        }
    }
    mysqli_close($conn);
}
?>