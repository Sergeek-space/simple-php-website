<?php

if(!isset($_COOKIE['checkLogin'])) {
    header("Refresh:0; url=login.php");
    exit;
}

include('master-page.php');

headTags($title);
bodyTags($title);
?>

<!--Content-->

<center><h1> Hi, <?php echo $_COOKIE['checkLogin']; ?>! Welcome to WIS! </h1></center>
<h2> Programs we offer: </h2>
<br>
<div class="container">

<table id="content-table">

<tr><th>Program:</th> <th>Level:</th> <th>Duration:</th> <th>Price:</th></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Bachelor of Information Technology</td><td>7</td><td>36 Months</td><td>NZD 18 000</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Graduate Diploma in Information Technology</td><td>7</td><td>12 Months</td><td>NZD 7 000</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Postgraduate Diploma in Information Technology</td> <td>8</td> <td>12 Months</td> <td>NZD 8 000</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>Master of Information Technology</td><td>9</td><td>20 Months</td><td>NZD 12 000</td></tr>

</table>

</div>

<!-- End of Content-->

<?php
footerTags($openHours,$phoneNumber,$formattedPN,$emailAddress,$mainAddress);

?>