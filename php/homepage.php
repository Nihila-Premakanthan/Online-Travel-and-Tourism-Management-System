<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paradise Found Here</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/homestyles.css">
        <link rel = "stylesheet" type = "text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
    
    </head>
    <body>
        <header class = "header">
              
        <div class = "inner_header">
            <h1 style = "color: #D4550C; ">Paradise Found Here</h1>
        </div>

        <div class = "header_button">
            <div class = "btn"><a href = "login.php">LOGIN</a></div>
            <div class = "btn"><a href = "user.php">SIGN UP</a></div>
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
                <img src = "../images/sltour.jpg" width = "100%">
                
                <br>
                <div class = "para">
                <p style = "font-size: 20px; color: black; text-align: justify; margin: 10px 10px;">The Paradise Found Here Experience unites Sri Lanka’s magic with the warmest hospitality of her people. Each one of our Sri Lanka
                    luxury resorts embody detailed guest services. From their conscientious creation through environmentally friendly 
                    and sustainable practices, we ensure that our guests are luxuriously comfortable. Contemporary facilities are blended 
                    into the design, indulging you as you sink into the surrounding beauty. Our luxury resorts in Sri Lanka include Paradise Found Here 
                    Ulagalla in Anuradhapura, Uga Jungle Beach in Trincomalee, Paradise Found Here Bay in Pasikudah, as well as Uga Residence – a unique 
                    boutique retreat in Colombo and Paradise Found Here Chena Huts in Sri Lanka’s safari hotspot Yala.</p>
                
                <center>
                <marquee direction = "left"><p>Number 1 in Sri Lanka</p><br></marquee>
                <marquee direction = "right"><p>Book Online</p><br></marquee>
                <marquee direction = "left"><p>We are trusted!</p><br></marquee>
                <marquee direction = "right"><p>Comfortable Payment</p><br></marquee>
                <marquee direction = "left"><p>Excursions in English</p></marquee>
                </center>
                </div>
                <center>
                <video class = "videosize" controls>
                <source src = "../video/home.mp4" type = "video/mp4">
                </center>
                </video>
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