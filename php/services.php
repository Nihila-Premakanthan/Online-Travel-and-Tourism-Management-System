<!DOCTYPE html>
<html>
    <head>
        <title>Paradise Found Here</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/homestyles.css">
        <link rel = "stylesheet" type = "text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    
    </head>
    <body>
        <header class = "header">
              
        <div class = "inner_header">
            <h1 style = "color: #D4550C;">Paradise Found Here</h1>
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
                <div class = "guide">
                    <h1> Tour Guides </h1>
                    
                      <table>
                                                                   
                         <tr>
                            <td><img src="../images/tg1.jpg" alt="" height=100 width=100></img></td>
                            <td>
                                <li>Name: A.B. Perera</li>
                                <li>Contact Number: 077-854 5485</li>
                                <li>Email: perera@gmail.com</li>
                                <li>Location: Galle - Sri Lanka</li>
                            </td >
                            <td>
                            <input type = "submit" value = "Confirm Reservation">
                            </td>
                            
                         </tr>
                         <tr>
                            <td><img src="../images/tg2.jpg" alt="" height=100 width=100></img></td>
                            <td>
                                <li>Name: C.D. Kusum</li>
                                <li>Contact Number: 071-654 9853</li>
                                <li>Email: kusum@hotmail.com</li>
                                <li>Location: Colombo - Sri Lanka</li>
                            </td>
                            <td>
                            <input type = "submit" value = "Confirm Reservation">
                            </td>
                            
                         </tr>
                         <tr>
                            <td><img src="../images/tg3.jpeg" alt="" height=100 width=100></img></td>
                            <td>
                                <li>Name: E.F. Namal</li>
                                <li>Contact NUmber: 076-854 9782</li>
                                <li>Email: namal@gmail.com</li>
                                <li>Location: Kandy - Sri Lanka</li>
                            </td>
                            <td>
                            <input type = "submit" value = "Confirm Reservation">
                            </td>
                            
                         </tr>
                      </table>  
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