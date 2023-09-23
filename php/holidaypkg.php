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
                
                <h2>Holiday Packages</h2>
                <table>
                    <tr>
                        <td><h3>WILDLIFE SAFARI</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/HolidaySL2.jpg" border = "2" height=250 width=250 >
                        <td>
        
                            <ul>
                                <li>The aim is it to provide you with a Sri Lanka Wildlife Safari Experience in spectacular solitude and soothing comfort.</li>
                                <li>2 Days/1 Night</li>
                                <li>Wilpattu</li>
                                <li>SAVE NOW Rs. 2,750</li>
                                <li>Rs.45,000</li>

                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>LANKA BY TRAIN</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/HolidaySL.jpg" border = "2" height=250 width=250></td>
                        <td>    
                        <ul>
                            <li>Riding across the hill country by train is truly a delightful, fascinating experience.</li>
                            <li>20 Days/19 Nights</li>
                            <li>All Island</li>
                            <li>SAVE NOW Rs. 25,750</li>
                            <li>Rs.155,000</li>
                        </ul>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><h3>DRIVING ALL AROUND SRILANKA</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/HolidaySl4.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                                <li>If you like to have full control over your holiday, check out our Self-Driving Sri Lanka. </li>
                                <li>40 Days/39 Nights</li>
                                <li>All Island</li>
                                <li>SAVE NOW Rs. 55,750</li>
                                <li>Rs.255,000</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>TEA PLANTATION BOUTIQUE</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/HolidaySL3.jpg" border = "2" height=250 width=250>
                        <td>
                            <ul>
                                <li>The tea planter’s bungalow sits on a mountainside overlooking emerald tea plantations and pine forests, flaunt the stunning hill country views.</li>
                                <li>5 Days/4 Nights</li>
                                <li>Kandy</li>
                                <li>SAVE NOW Rs. 5,750</li>
                                <li>Rs.25,000</li>
                            </ul>
                        </td>
                    <tr>
                        <td><h3>BENTOTA BEACH</h3></td>
                    </tr>    
                    <tr>
                        <td><img src = "../images/AdventureSL4.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                                <li>Bentota is known for its broad golden beaches.</li>
                                <li>3 Days/2 Nights</li>
                                <li>Bentota</li>
                                <li>SAVE NOW Rs. 5,750</li>
                                <li>Rs.55,000</li>
                            </ul>
                        </td>
                    </tr>
                    
                </table>
                <br>
                <div style = "float: right; margin: 0px 20px;">
                <button name = "submit" class = "register">BOOK NOW</button><br><br>
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