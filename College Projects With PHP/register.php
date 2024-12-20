<?php
include('nav.php');
?>
  <div class="div">
    <form action="PHP/register.php"method="POST">
      <h3>Register</h3>
      <input type="text" placeholder=" User Name "name="user" class="ti"><br>
      <input type="text" placeholder=" First Name "name="firstname" class="ti"><br>
      <input type="text" placeholder=" Last Name "name="lastname" class="ti"><br>
      <input type="email" placeholder=" Email ID " name="email"class="ti"><br>
      <input type="password" placeholder=" Password "name="password" class="ti"><br>
      <input type="password" placeholder=" Confirm Password " name="confirmpassword"class="ti">
      <input type="submit"value="Sumbit"class="sumbit"name="submiting">
      
    </form>
  </div>
</body>
</html>