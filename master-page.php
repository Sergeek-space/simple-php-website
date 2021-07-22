<?php

$title = "Welcome Institute of Studies";

function headTags($title) {

    $message = "
    <!DOCTYPE html>

    <head>
        <meta charset='UTF-8'>
        <link href='css/master.css' rel='stylesheet' type='text/css' />
        <link href='css/reg-form.css' rel='stylesheet' type='text/css' />
        <link href='css/index.css' rel='stylesheet' type='text/css' />
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
        <title>".$title."</title>
    </head>
    ";
    echo $message;
}

function bodyTags($title) {

    $message = "
    <body>
    <!-- Header -->
    <header class='header'>
        <img id='logo-img' alt='Logo' src='images/logo.jpg'>
        <p class='logo-title'>".$title."</p>
        <nav id='menu'>
            <a class='btn' href='index.php'>HOME</a> |
            <a class='btn' href='login.php'>LOGIN</a> |
            <a class='btn' href='registration.php'>REGISTER</a> |
            <a class='btn' href='contacts.php'>CONTACTS</a>
        </nav>
    </header>

    <hr id='header-hr'><br><br>
    ";
    echo $message;
}

// Content goes here

// Footer vars:
$openHours = "Monday to Friday <br>10 AM to 19 PM";
$phoneNumber = "642041820586";
$formattedPN = "64(204)182-05-86";
$emailAddress = "info@wis.ac.nz";
$mainAddress = "28A Linwood Avenue, <br>Mount Albert, <br>Auckland 1025";

function footerTags($openHours,$phoneNumber,$formattedPN,$emailAddress,$mainAddress) {

    $message = "
    <br><br><hr id='header-hr'>
        <!-- Footer -->
        <footer class='footer'>
            <br />
            <table id='ftr-table'>
                <tr>
                    <td><b>Business Hours:</b></td>
                    <td><b>Phone Number:</b></td>
                    <td><b>Email:</b></td>
                    <td><b>Address:</b></td>
                    <td><b>Follow us:</b></td>
                </tr>

                <tr>
                    <td id='ftr-td'>".$openHours."</td>
                    <td id='ftr-td'><a href='tel:+".$phoneNumber."'>+".$formattedPN."</a></td>
                    <td id='ftr-td'><a href='mailto:".$emailAddress."'>".$emailAddress."</a></td>
                    <td id='ftr-td'><a href='contacts.php'>".$mainAddress."</a></td>
                    <td id='ftr-td'><a target='_blank' href='#' class='fa fa-facebook'></a>&nbsp;<a href='#'
                            class='fa fa-youtube'></a>&nbsp;<a href='#' class='fa fa-instagram'></a></td>
                </tr>


            </table>
        </footer>

        <!-- Java Script -->
        <script type='text/javascript' src='js/master.js'></script>

    </body>
    </html>
    ";
    echo $message;
}

?>