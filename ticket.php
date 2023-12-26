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
                <h1>Tickets</h1>
            </div>
            <div class="book-btn-2 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
                <a href="register.php"><button class="book-btn">Register Now</button></a>
            </div>
        </div>


    </div>

<section class="ticket-section">
    <div class="container" data-aos="fade-in" data-aos-duration="3000">
        <h2>Plan</h2>
        <h6>To reserve a seat, register now.</h6>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="ticket-card ticket-platinum">
                    <div class="ticket-head bg-primary">
                        <h2>Platinum</h2>
                    </div>
                    <h3>Free</h3>
                    <h5>Sales end on <span>28 Sep 2023</span></h5>
                    <div class="ticket-body">
                        <h6><i class="fas fa-check"></i>Includes special access and food.</h6>
                    </div>
                    <a href="register.php"><button class="register-btn-outline">Register Now</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ticket-card ticket-silver">
                    <div class="ticket-head bg-info">
                        <h2>Silver</h2>
                    </div>
                    <h3>Free</h3>
                    <h5>Sales end on <span>28 Sep 2023</span></h5>
                    <div class="ticket-body">
                        <h6><i class="fas fa-check"></i>Includes special access and food.</h6>
                    </div>
                    <a href="register.php"><button class="register-btn-outline">Register Now</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ticket-card ticket-gold">
                    <div class="ticket-head bg-pink">
                        <h2>Gold</h2>
                    </div>
                    <h3>Free</h3>
                    <h5>Sales end on <span>28 Sep 2023</span></h5>
                    <div class="ticket-body">
                        <h6><i class="fas fa-check"></i>Includes special access and food.</h6>
                    </div>
                    <a href="register.php"><button class="register-btn-outline">Register Now</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
 <?php include("footer.php")?>


 <script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>
 <script src="js/bootstap.min.js"></script>
 <script src="js/owl.carousal.js"></script>
 <script src="js/counter.js "></script>
 <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
 <script src="js/aos.js"></script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

</body>

</html>