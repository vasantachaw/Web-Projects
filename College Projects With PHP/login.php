 <?php
include('nav.php');
?>
<div class="div">
    <form action="PHP/login.php" method="POST">
      <h3>Login</h3>

      <input type="text" placeholder=" User Name " class="ti" name="user"><br>
      <input type="password" placeholder=" Password " class="ti" name="password">
      <br><input type="password" placeholder="Confirm Password " class="ti" name="confirmpassword">
      <br><br><br>
      <input type="submit" value="Submit" class="sumbitt" name="submiting">

    </form>
  </div>
  </body>
  </html>