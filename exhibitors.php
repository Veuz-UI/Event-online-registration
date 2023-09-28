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
                <h1>Exhibitors</h1>
            </div>

        </div>


    </div>

    <section class="exhibitor-section">
    <div class="container">
        
        <div class="row d-flex justify-content-center">
            <!-- <div class="col-lg-12">
                <div class="category-heading">
                    <h4>Booth Category</h4>
                </div>
            </div> -->
            <div class="col-md-4" data-aos="fade-in" data-aos-duration="3000">
                <div class="exhibitor-div" data-bs-toggle="modal" data-bs-target="#booth-modal">

                    <div class="exhibitor-head">
                        <h2>Booth 1</h2>
                        <h4>Free</h4>
                    </div>
                    <div class="exhibitor-details">
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit quas. Maxime mollitia,
                           molestiae quas vel sint commodi quas repudiandae consequuntur voluptatum laborum
                           </p>
                        <button class="view-spkr apply-spkr">Apply</button>
                    </div>



                </div>
            </div>
            <div class="col-md-4" data-aos="fade-in" data-aos-duration="3000">
                <div class="exhibitor-div" data-bs-toggle="modal" data-bs-target="#booth-modal">

                    <div class="exhibitor-head">
                        <h2>Booth 2</h2>
                        <h4>Free</h4>
                    </div>
                    <div class="exhibitor-details">
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit quas. Maxime mollitia,
                           molestiae quas vel sint commodi quas repudiandae consequuntur voluptatum laborum
                           </p>
                        <button class="view-spkr apply-spkr">Apply</button>
                    </div>



                </div>
            </div>
            <div class="col-md-4" data-aos="fade-in" data-aos-duration="3000">
                <div class="exhibitor-div" data-bs-toggle="modal" data-bs-target="#booth-modal">

                    <div class="exhibitor-head">
                        <h2>Booth 3</h2>
                        <h4>Free</h4>
                    </div>
                    <div class="exhibitor-details">
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit quas. Maxime mollitia,
                           molestiae quas vel sint commodi quas repudiandae consequuntur voluptatum laborum
                           </p>
                        <button class="view-spkr apply-spkr">Apply</button>
                    </div>



                </div>
            </div>
        </div>
        
        

    </div>
</section>
 <?php include("footer.php")?>

<div class="modal fade" id="booth-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><span>Exhibitor</span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="dae2pt"></button>
        </div>
        <div class="modal-body">
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Company Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Please Enter Company Name" fdprocessedid="lv085">
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Company Website URL</label>
                        <input class="form-control" type="text" placeholder="Please Enter Company Website URL" fdprocessedid="6ouupo">
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Company Slogan</label>
                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Description</label>
                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">First Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="First Name" fdprocessedid="urdw2h">
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Last Name</label>
                        <input class="form-control" type="text" placeholder="Last Name" fdprocessedid="2cqvol">
                    </div>
                
                </div>

                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Phone Number</label>
                        <input class="form-control" type="text" placeholder="Please Enter Phone Number" fdprocessedid="imju3">
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Alternate Phone Number</label>
                        <input class="form-control" type="text" placeholder="Please Enter Phone Number" fdprocessedid="1k802">
                    </div>
                
                </div>
                <div class="col-md-6">
                    <div class="form-grp">
                        <label class="form-label">Email<span>*</span></label>
                        <input class="form-control" type="text" placeholder="Please Enter Email id" fdprocessedid="y7s7z">
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="footer-btns">
                        <button type="button" class="btn btn-danger text-uppercase br-50 btn-md add-exhibitor-btn" data-bs-dismiss="modal">Submit</button>
                        <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Close</button>
                    </div>
                  
                </div>
            </div>
        </div>
       
    </div>
</div>
</div>

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