<?php

include('master-page.php');

headTags($title);
bodyTags($title);
?>

<!--Content-->

<div class="container">

<p>Phone Number: <a href='tel:+<?php echo $phoneNumber;?> '>+<?php echo $formattedPN;?></a></p> 
<p>Email: <a href='mailto:<?php echo $emailAddress;?>'><?php echo $emailAddress;?></a></p>
<p>Address: </p> 
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.718079186875!2d174.71830641517997!3d-36.87316637993361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d471b377a501d%3A0xd67af95228903ac4!2s28A%20Linwood%20Avenue%2C%20Mount%20Albert%2C%20Auckland%201025!5e0!3m2!1sen!2snz!4v1616367801838!5m2!1sen!2snz" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>

</div>


<!-- End of Content-->

<?php

footerTags($openHours,$phoneNumber,$formattedPN,$emailAddress,$mainAddress);

?>