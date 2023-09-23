<!DOCTYPE html>
<html  lang="en">
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
                    <li><a href = "seasonaloffer.html">Seasonal Offers</a></li>
                    <li>Packages</li>
                        <ul type = "none">
                            <li><a href = "adventurepkg.php">Adventure</a></li>
                            <li><a href = "familypkg.php">Family</a></li>
                            <li><a href = "holidaypkg.php">Holiday</a></li>
                            <li><a href = "honeymoonpkg.php">Honeymoon</a></li>
                        </ul>
                    <li><a href = "services.html">Services</a></li>
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
                <h2>Foreign Bookings</h2>
                <table>
                    <tr>
                        <td><h3>Machu Picchu, Peru</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/machupuchperu.jpg" border = "2" height=250 width=250 >
                        <td>
        
                            <ul>
                                <h3>Located high in the Andes mountains of Peru, Machu Picchu is now believed to have been a sacred royal retreat for the Incan rulers. Built in the 15th century AD and abandoned less than a 100 years later, the remote site continues to amaze with its perfectly joined, mortarless, intricate stonework. Huge multi-ton blocks of stone are perfectly joined with each other, without the use of mortar or cement.</h3>
                                 <li>3 Days/2 Nights</li>
                                <li>USD 700</li>
                           </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>The Grand Canyon, Arizona</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/Arizona.jpg" border = "2" height=250 width=250></td>
                        <td>    
                        <ul>
                                <h3>This incredible sight, one of the seven natural wonders of the world, is in the U.S. state of Arizona. It's one of those beautiful places for which photos or video just don't do it justice-its sheer size and scope is hard to comprehend.</h3>
                                 <li>2 Days/ 1 Nights</li>
                                <li>USD 500</li>
                                
                        </ul>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><h3>Rome, Italy</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/Rome, Italy.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                                <h3>The Eternal City is more like a giant, living museum. Visitors are immersed in and surrounded by thousands of years of history. It's a relatively compact city, and a three-day itinerary gets you to the minimum number of must-see places..</h3>
                                 <li>2 Days/ 1 Night</li>
                                <li>USD 700</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Maui, Hawaii</h3></td>
                    </tr>
                    <tr>
                        <td><img src = "../images/Maui, HawaiiSL.jpg" border = "2" height=250 width=250>
                        <td>
                            <ul>
                                <h3>This Hawaiian island offers a wide range of experiences for visitors. You can surf, enjoy a meal on the beach at a five-star luxury resort in Wailea, ride a horse across a dormant volcano in Haleakala National Park, or hike through a rainforest in the West Maui Mountains. The natural scenery is amazing-it's truly one of the most beautiful islands in the world.</h3>
                                 <li>3 Days/ 2 Nights</li>
                                <li>USD 800</li>

                            </ul>
                        </td>
                    <tr>
                        <td><h3>Masai Mara, Kenya</h3></td>
                    </tr>    
                    <tr>
                        <td><img src = "../images/MASAIMARAKENYA.jpg" border = "2" height=250 width=250>
                        <td>
                            
                            <ul>
                                <h3>Kenya's Masai Mara is an incredible bio-diverse area and a popular safari destination. It's an opportunity to see the "big five" animals (lion, leopard, rhinoceros, elephant, and Cape buffalo) all during one trip or, if you're lucky, during one afternoon.</h3>
                                 <li>4 Days/3Nights</li>
                                <li>USD 900</li>
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