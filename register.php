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

    <div class="background-all-tckt-div">
        <div class="container">

            <?php include("header.php")?>
           
            <div class="register-box-div" data-aos="fade-up" data-aos-duration="2000">
                <div class="register-head">
                    <h2>Tickets</h2>
                    <div class="d-flex align-items-center mt-3">
                        <img src="images/logo.png" alt="" class="img-fluid">
                        <h5>Event Name</h5>
                    </div>
                </div>
                <hr class="head-border-line">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ticket-box d-flex justify-content-between align-items-center">
                            <div class="">
                                  <h3>Silver</h3>
                              </div>
                              <div class="">
                                  <h5>$ 30.00</h5>
                              </div>
                              <div class="">
                                  <select class="custom-select ticket-nmber" name="nb_register-11">
                                      <option>0</option>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                              </select>
                              </div>
                      </div>
                      <div class="ticket-box d-flex justify-content-between align-items-center mt-3">
                        <div class="">
                              <h3>Silver</h3>
                          </div>
                          <div class="">
                              <h5>$ 30.00</h5>
                          </div>
                          <div class="">
                              <select class="custom-select ticket-nmber" name="nb_register-11">
                                  <option>0</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                          </select>
                          </div>
                  </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="registr-btn h-100">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success waves-effect waves-light w-sm">
                             Register
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 mt-3">
                        <div class="adrss-boxes h-100 d-flex justify-content-center align-items-center flex-column">
                            <h5>DATE & TIME</h5>
                            <h4>Wednesday October 18, 2023</h4>
                            <h2>11:30 AM<span class="time-arrow"><i class="fa-solid fa-arrow-right"></i></span>7:30 PM</h2>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-phone-volume"></i>
                                <a href="">987456123</a>
                            </div>
                            <h6>Europe/Brussels</h6>
                            <button class="add-clndr-tickt">Add to Calendar</button>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <div class="adrss-boxes h-100 d-flex justify-content-center align-items-center flex-column">
                            <h5>LOCATION</h5>
                            <h4>Wembley Stadium</h4>
                            <h3>London</h3>
                            <h3>London</h3>
                            <h3>United Kingdom</h3>
                            <h3>Wembley HA9 0WS</h3>
                            <div class="d-flex align-items-center mt-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <a href="">Get the Direction</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <div class="adrss-boxes h-100 d-flex justify-content-center align-items-center flex-column">
                            <h5>DATE & TIME</h5>
                            <h4>My Company (San Francisco)</h4>
                            <div class="d-flex align-items-center my-2">
                                <i class="fa-solid fa-phone-volume"></i> 
                                <a href="">987456123</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="">info@yourcompany.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <div class="adrss-boxes h-100 d-flex justify-content-center align-items-center flex-column">
                            <h5>SHARE</h5>
                            <p>Find out what people see and say about this event, and join the conversation.</p>
                            <div class="social-icons d-flex justify-content-center">
                                <i class="fa-brands fa-facebook" style="color: #263238;"></i>
                                <i class="fa-brands fa-linkedin" style="color: #263238;"></i>
                                <i class="fa-brands fa-twitter" style="color: #263238;"></i>
                                <i class="fa-brands fa-instagram" style="color: #263238;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tickt-descrptn">
                    <h3>Join us for this 24 hours Event</h3>
                    <p>Every year we invite our community, partners and end-users to come and meet us! It's the ideal event to get together and present new features, roadmap of future versions, achievements of the software, workshops, training sessions, etc.... This event is also an opportunity to showcase our partners' case studies, methodology or developments. Be there and see directly from the source the features of the new version!</p>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php")?>





    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header tcket-modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span></span>
                        Attandees</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tcket-modal-body">
                    <h3 class="tickt-modal-head">
                        Ticket #1 <span>silver</span>
                    </h3>
                    <div class="row gx-3">
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Name</label>
                                    <input class="form-control" placeholder="Enter name" type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Email</label>
                                    <input class="form-control" placeholder="Enter email" type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Phone(optional)</label>
                                    <input class="form-control" placeholder="Enter phone" type="text">
                            </div>
                        </div>    
                    </div>
                    <hr class="tickt-modal-line">
                    <h3 class="tickt-modal-head mt-4">
                        Ticket #2 <span>general</span>
                    </h3>
                    <div class="row gx-3">
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Name</label>
                                    <input class="form-control" placeholder="Enter name" type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Email</label>
                                    <input class="form-control" placeholder="Enter email" type="text">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ticket-modal-form">
                                    <label for="">Phone(optional)</label>
                                    <input class="form-control" placeholder="Enter phone" type="text">
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start tcket-modal-footer">
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-target="#add-session" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fas fa-arrow-left me-2"></i>Cancel</button>
                </div>
            </div>
        </div>
    </div>

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