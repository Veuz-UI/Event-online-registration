<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/fav.webp" rel="icon" />
    <title>Veuz</title>
    <link rel="stylesheet" href="css/icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="images/favicon.png" rel="icon" />
</head>

<body>

    <div class="background-inner">
        <div class="container">

            <?php include("header.php")?>
            <div class="inner-heading" data-aos="zoom-in" data-aos-duration="1000">
                <h1>Tickets</h1>
            </div>
            <div class="book-btn-2 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
                <button class="book-btn">Register Now</button>
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
                    <button class="register-btn-outline">Register Now</button>
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
                    <button class="register-btn-outline">Register Now</button>
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
                    <button class="register-btn-outline">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <div class="footer-1">
        <div class="icons d-flex justify-content-center">
            <a href="#"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a> 
               <a href="#"> <i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a> 
               <a href="#"> <i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a> 

          
        </div>
        <h6 class="copyright d-flex justify-content-center">© Veuz concepts 2022. all rights reserved</h6>
    </div>
</section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js "
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js "
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script src="js/counter.js "></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script>
        AOS.init({
            disable: 'mobile'
        });
    </script>

</body>

</html>