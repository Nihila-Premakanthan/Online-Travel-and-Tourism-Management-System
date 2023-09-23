<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/homestyles.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/contactstyles.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/loginstyles.css">
        <link rel = "stylesheet" type = "text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>

    <body>
        <?php
            include "connection.php"; //include connection php file
        ?>
        <header class = "header">
              
            <div class = "inner_header">
                <h1 style = "color: #D4550C; ">Paradise Found Here</h1>
            </div>
    
            <div class = "header_button">
                <div class = "btn"><a href = "login.php">LOGIN</a></div>
                <div class = "btn"><a href = "../html/UserDetails.html">SIGN UP</a></div>
            </div>
            </header>
    
            <div class = "main">
                <div class = "main_left">
                    <ul class = "bookings" type = "none">
                        <li>Bookings</li>
                            <ul type = "none"> 
                                <li><a href = "localbooking.php">Local</a></li>
                                <li><a href = "foreignbooking.php">Foreign</a></li>
                            </ul>
                        <li><a href = "promotions.php">Promotions</a></li>
                        <li><a href = "seasonaloffer.php">Seasonal Offers</a></li>
                        <li>Packages</li>
                            <ul type = "none">
                                <li><a href = "adventurepkg.php">Adventure</a></li>
                                <li><a href = "familypkg.php">Family</a></li>
                                <li><a href = "holidaypkg.php">Holiday</a></li>
                                <li><a href = "honeymoonpkg.php">Honeymoon</a></li>
                            </ul>
                        <li><a href = "services.php">Services</a></li>
                    </ul>
                </div>
    
                <div class = "main_right">
                    <div class = "navigation">
                        <ul type = "none">
                            <li><a href = "homepage.php">Home</a></li>
                            <li><a href = "abtus.php">About us</a></li>
                            <li><a href = "covid.php">COVID-19</a></li>
                            <li><a href = "contactus.php">Contact Us</a></li>                    
                            <li><a href = "faq.php">FAQ</a></li>
    
                            <div class = "search_bar">
                                <form action = "action.php">
                                    <input type = "text" name = "search" placeholder="Search">
                                    <button type = "submit"><i class = "fa fa-search"></i></button>
                                </form>
                            </div>
                    </div>
                    <br><br><br>
                    <table class = "center">
                        <tr>
                            <td>We are located at:<br><br>
                            No. 16, Malabe Road, Malabe</td>

                            <td>Working Time:<br><br>
                            8.00 - 18.00</td>

                            <td>Working Days:<br><br>
                            Everyday</td>
                        </tr>
                        </table>

                    <br>
                    <p style = "font-size: 30px; font-family: Lucida sans unicode; font-weight: bold;">Get in touch with us! </p>
                    <p style = "font-size: 25px;">We are here to answer your questions. Send us a message:</p>
                    
                    <div class = "textbox">
                    <form method = "post" action = "contactconfig.php">
                        <h5>Full Name: </h5>
                        <input type = "text" class="input" id = "fullName" name = "Full_Name" required><br><br>
                        <h5>Contact Number:</h5>
                        <input type = "text" class="input" id = "contact" name = "Contact_Number" required><br><br>
                        <h5>Email Address: </h5>
                        <input type = "email" class="input" id = "email" name = "Email_Address" required><br><br>
                        <h5>Your Message: </h5>
                        <textarea id = "message" name = "message" rows = "10" cols = "50" style = "margin-left: 14px;" placeholder = "Enter your message" required></textarea><br><br>
                        <button name = "submit" class = "subbutton">SUBMIT</button>
                    </form>
                    </div>
                </div>
            </div>
    
            <footer class = "footer">
                <div>
                    <p>We are located at:</p>
                    <p>No. 16, Malabe Road, Malabe</p>
                </div>
                    
                <div>
                    <p>Contact us on:</p>
                    <p>(+94)77894623</p>
                </div>
                    
                <div>
                    <p>Email us on:</p>
                    <p>paradisefoundhere@outlook.com</p>
                </div>      

                <div class = "social_media">
                    <p>Follow us on!</p>
                    
                    <a href = "https://www.facebook.com/profile.php?id=100080520817869"><i class = "fab fa-facebook-f"></i></a>
                    <a href = "https://www.instagram.com/paradisefoundhere00/?hl=en"><i class = "fab fa-instagram"></i></a>
                    <a href = "https://twitter.com/Paradisefounded"><i class = "fab fa-twitter"></i></a>
                    
                </div>
                
            </footer>   
    </body>
</html>