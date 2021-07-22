<?php

include('master-page.php');

headTags($title);
bodyTags($title);
?>

<!--Content-->

<?php

include('db-operations.php');

if (isset($_POST['submitCheck'])) {

  $hasedPasswd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO tblUsers (firstname, lastname, email, passwd) 
          VALUES('".$_POST['firstName']."',
          '".$_POST['lastName']."',
          '".$_POST['emailAddress']."',
          '".$hasedPasswd."')
  "; 
  
  $res = dbQuery($serverName, $userName, $password, $dbName, $sql);

  // echo "Registration is Successful! Redirecting you to the login page...";
  // header("Refresh:3; url=login.php");

  $userFullName = $_POST['firstName']." ".$_POST['lastName'];
  setcookie("checkLogin",$userFullName, time() + 60);
  header("Refresh:0; url=index.php");

}
else {
    // The form has not been posted; Show the form
    ?>
  <h2>Registration form:</h2>
  <br>
  <div class="container">
    <form id="registrationForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="LastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>

      <label for="emailAddress">Email:</label>
      <input type="text" id="emailAddress" name="emailAddress" required>
      <!-- TODO: Add email address validation -->

      <label for="passwd">Password:</label>
      <input type="password" id="passwd" name="passwd" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
        title="Must contain at least one number and one uppercase and lowercase letter, 
              and at least 8 or more characters" required>
      
      <input type="hidden" name="submitCheck" value="Sent">
      <input type="submit" value="Submit">
    </form>
  </div>


  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div>
          
  <script type="text/javascript" src="js/reg-form.js"></script>

  <?php
}
?>

<!-- End of Content-->

<?php
footerTags($openHours,$phoneNumber,$formattedPN,$emailAddress,$mainAddress);

?>