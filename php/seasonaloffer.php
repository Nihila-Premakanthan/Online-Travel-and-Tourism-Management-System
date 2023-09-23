<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paradise Found Here</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/homestyles.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/offer.css">
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
                <h1>Seasonal Offers</h1>
                <h2 align = "center" style = "color: red;" id = "registernow">GRAB YOUR OFFER BEFOR THE VALIDITY PERIOD ENDS!!!</h2>
                <script type="text/javascript">
                    var blink = 
                        document.getElementById('registernow');
  
                        setInterval(function () {
                            blink.style.opacity = 
                            (blink.style.opacity == 0 ? 1 : 0);
                        }, 500); 
                </script>

                <table>
                    <tr>
                        <td><h2>Top Beaches Tour</h2></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/slss.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                            <h3>This special, winter peak season tour package, gives you access to all the top beaches on Sri Lanka's South Coast.</h3>
                                <li>4 Days/3Nights</li>
                                <li>Rs.93,000</li>
                               <h2>October - May</h2>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Whale Watching</h2></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/historicalsl.jpg" border = "2" height=250 width=250>
                        <td>
                            <ul>
                            <h3>Trincomalee, 257 km east of Colombo, is fast becoming a top spot to watch Blue Whales, Sperm Whales and Dolphins.</h3>
                                <li>5 Days/4Nights</li>
                                <li>Rs.73,000</li>
                               <h2>May - October</h2>
                            </ul>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><h2>Kandy Perahera</h2></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/fgsl.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                            <h3>The Esala Perahera in Kandy is one grandest of all Buddhist festivals, featuring dancers, and lavishly decorated elephants.</h3>
                                <li>5 Days/4Nights</li>
                                <li>Rs.83,000</li>
                               <h2>July - August</h2>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td><h2>South Coast Diving </h2></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/romsl.jpeg" border = "2" height=250 width=250></td>
                        <td>    
                        <h3>Surrounded by the warm waters of the Indian Ocean, Sri Lanka offers exceptional diving opportunities.</h3>
                                <li>7 Days/6Nights</li>
                                <li>Rs.93,000</li>
                               <h2>October - May</h2>
                            </ul>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><h2>Christmas in Sri Lanka</h2></td>
                    </tr>
                    <tr>  <td><img src = "../images/offer5.jpg" border = "2" height=250 width=250></td> 
                        <td>
                            
                            <h3>Have you ever longed to get away at Christmas and enjoy an extra special festive break on a tropical island?</h3>
                                <li>3 Days/2Nights</li>
                                <li>Rs.63,000</li>
                               <h2>December - January</h2>
                        </td>
                        
                    </tr>
                    
                </table>
                <br>
                <div style = "float: right; margin-right: 10px">
                <button name = "submit" class = "register">REGISTER NOW!</button><br><br>
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