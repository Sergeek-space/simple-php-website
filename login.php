<?php

include('master-page.php');
include('db-operations.php');

if (isset($_POST['submitCheck'])) {
    // Check if the form has been posted, and query the DB if the user exist
    $sql = "SELECT id, firstname, lastname, passwd FROM tblUsers 
            WHERE email = '".$_POST['userEmail']."' ;";
    $res = dbQuery($serverName, $userName, $password, $dbName, $sql);
    
    if ($res == "0 results") {
        // No user
        echo '<script>alert("Incorrect Email or Password!")</script>';
        header("Refresh:0");
    }

    else {
        // User is in the DB, check if the password hash match
        $hash = $res[0]['passwd'];

        if (password_verify($_POST['userPassword'], $hash)) {
            //Leverage built-in function to match input with DB info
            $userFullName = $res[0]['firstname']." ".$res[0]['lastname'];
            
            setcookie("checkLogin",$userFullName, time() + 60);
            header("Refresh:0; url=index.php");

        }

        else {
            // Wrong Password
            echo '<script>alert("Incorrect Email or Password!")</script>';
            header("Refresh:0");

        }
    }
   
} 

else {
    // The form has not been posted; Show the form
    headTags($title);
    bodyTags($title);
    ?>

    <!--Content-->
    <h2>Please, login to see the website content:</h2>
    <br>
    <div class="container">
        
        <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="userEmail">Registration Email:</label>
        <input type="text" name="userEmail">

        <label for="userPassword">Password:</label>
        <input type="password" name="userPassword">
    
        <input type="hidden" name="submitCheck" value="Sent">
        <input type="Submit" name="loginFormSubmit" value="Login">
        </form>
    </div>
    <!-- End of Content-->
<?php
footerTags($openHours,$phoneNumber,$formattedPN,$emailAddress,$mainAddress);
}
?>
