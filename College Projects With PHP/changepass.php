<?php
include('nav.php');
?>
  <div class="div">
    <form action="PHP/changepass.php"method="POST">
      <h3>change password</h3>
      <input type="password" placeholder=" New Password " class="ti"name="password"><br>
      <input type="password" placeholder=" Confirm Password " class="ti"name="confirmpassword"><br><br>
      <input type="submit"value="change"class="sumbit"name="changing">
    </form>
  </div>
</body>
</html>
