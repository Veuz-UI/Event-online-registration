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
                <h1>Agenda</h1>
            </div>

            <div class="book-btn-2 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
                <button class="book-btn">Add to Calendar</button>
                <button class="book-btn-outline">Print Agenda</button>
            </div>

        </div>


    </div>

<section class="agenda-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3" data-aos="fade-right" data-aos-duration="3000">
                <div class="nav agenda-tab flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <div class="agenda-days">
                            <h5>Day - 1</h5>
                            <H6>Thu, 28 Sep 2023</H6>
                        </div>
                    </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <div class="agenda-days">
                            <h5>Day - 2</h5>
                            <H6>Thu, 28 Sep 2023</H6>
                        </div>
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <div class="agenda-days">
                            <h5>Day - 3</h5>
                            <H6>Thu, 28 Sep 2023</H6>
                        </div>
                    </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <div class="agenda-days">
                            <h5>Day - 4</h5>
                            <H6>Thu, 28 Sep 2023</H6>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-duration="3000">
                <div class="tab-content agenda-tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="d-flex agenda-timeline">
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>08:20 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Welcome note</h5>
                                                <h6><i class="fas fa-clock"></i>45 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>09:15 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Speaking about the politics of the nation related topics</h5>
                                                <h6><i class="fas fa-clock"></i>1 Hour 30 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>11:00 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Debate about sports</h5>
                                                <h6><i class="fas fa-clock"></i>1 Hour</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                           
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="d-flex agenda-timeline">
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>08:20 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Welcome note</h5>
                                                <h6><i class="fas fa-clock"></i>45 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>09:15 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Speaking about the politics of the nation related topics</h5>
                                                <h6><i class="fas fa-clock"></i>1 Hour 30 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              
                               
                            </ul>
                           
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="d-flex agenda-timeline">
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>08:20 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Welcome note</h5>
                                                <h6><i class="fas fa-clock"></i>45 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>09:15 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Speaking about the politics of the nation related topics</h5>
                                                <h6><i class="fas fa-clock"></i>1 Hour 30 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>11:00 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Debate about sports</h5>
                                                <h6><i class="fas fa-clock"></i>1 Hour</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                           
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="d-flex agenda-timeline">
                            <ul class="verti-timeline list-unstyled">
                                <li class="event-list">
                                    <div class="event-timeline-dot">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 agenda-col1">
                                            <h5>08:20 AM</h5>
                                        </div>
                                        <div class="flex-grow-1 agenda-col2">
                                            <div class="agenda-details">
                                                <h5>Welcome note</h5>
                                                <h6><i class="fas fa-clock"></i>45 Minutes</h6>
                                                <h6><i class="fas fa-map-marker-alt"></i>Aishwarya Banquet Hall,calicut</h6>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                    A
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                            <img src="images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hash-tags">
                                                    <a href="#">#it</a>
                                                    <a href="#">#development</a>
                                                    <a href="#">#design</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           
                        
                               
                            </ul>
                           
                        </div>
                    </div>
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