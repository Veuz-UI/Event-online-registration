<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.png" rel="icon" />
    <title>Veuz</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousal.css">
    <link rel="stylesheet" type="text/css" href="css/owl-theme.css">
    <link href="css/aos.css" rel="stylesheet">
</head>

<body>

    <div class="background-inner">
        <div class="container">

            <?php include("header.php")?>
            <div class="inner-heading" data-aos="zoom-in" data-aos-duration="1000">
                <h1>Venue</h1>
            </div>

            <div class="book-btn-2 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
              <a href="#"> <button class="book-btn">Get Direction</button></a> 
            </div>

        </div>


    </div>

<section class="venue-section">
    <div class="container">
        <div class="row">
            <div class="venue">
                <h2>Get Direction</h2>
                <h6>Directions to the event venue</h6>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000">
                        <div class="when">
                            <div class="row">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <div class="clndr-v d-flex justify-content-center align-items-center">
                                        <img src="images/menstruation.gif" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 d-flex align-items-center">
                                    <div class="whn-cntnt">
                                        <h3 class="when-h3">When</h3>
                                        <div class="when-cntnd d-flex">
                                            <div class="d-flex align-items-center c-clndr">
                                                <i class="fa-regular fa-calendar"></i>
                                                <h3>Sep 28, 2023 - Sep 30, 2023</h3>
                                            </div>
                                            <div class="d-flex align-items-center ms-md-3 ms-0 c-clock">
                                                <i class="fa-regular fa-clock"></i>
                                                <h3>08:00 AM</h3>
                                            </div>
                                         
                                        </div>
                                        <button class="add-clndr">Add to Calendar</button>
                                    </div>
        
                                </div>
                            </div>
        
        
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-duration="2000">
                        <div class="where">
                            <div class="row">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <div class="map-v d-flex justify-content-center align-items-center">
                                        <img src="images/pin.gif" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 d-flex align-items-center">
                                    <div class="whr-cntnt">
                                        <h3 class="when-h3">Location</h3>
                                        <h4 class="location">Cyberpark Kozhikode</h4>
                                        <h5 class="address">28/1650D, Cyberpark Kozhikode Park Road, Nellikkode,
                                            Kozhikode, Kozhikode, Kerala 673016 India</h5>
                                    </div>
        
        
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</section>
<section class="map-section">
    <div class="map-main-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.0981768178704!2d75.8344504117973!3d11.254187850151101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65b946032ba75%3A0xf5ed91156d32a4f2!2sCyberpark%20Kozhikode!5e0!3m2!1sen!2sin!4v1694498260442!5m2!1sen!2sin" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</section>
 <?php include("footer.php")?>


 <script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstap.min.js"></script>
<script src="js/owl.carousal.js"></script>
<script src="js/counter.js "></script>
<script src="js/fontawesome.js"></script>
<script src="js/aos.js"></script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

</body>

</html>