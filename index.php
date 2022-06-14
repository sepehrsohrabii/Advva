<?php

    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
        $companyEmail = filter_var($_POST['companyEmail'], FILTER_SANITIZE_EMAIL);
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $state  = filter_var($_POST['state'], FILTER_SANITIZE_STRING);

        // Creating Array of Errors
        $formErrors = array();
        if (strlen($company) <= 3) {
            $formErrors[] = 'Company Name Must Be Larger Than <strong>3</strong> Characters';
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        // $headers = 'From: ' . $email . '\r\n';
        $headers = 'From: advva@rs018.webhostbox.net' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $myEmail = 'info@advva.com';
        $subject = 'Contact Form';
        $message = "<html><body>";
        $message .= "<div>First Name: </div>" . strip_tags($_POST['fname']) ."</br>";
        $message .= "<div>Last Name: </div>" . strip_tags($_POST['lname']) ."</br>";
        $message .= "<div>Company: </div>" . strip_tags($_POST['company']) ."</br>";
        $message .= "<div>Company Email: </div>" . strip_tags($_POST['companyEmail']) ."</br>";
        $message .= "<div>City: </div>" . strip_tags($_POST['city']) ."</br>";
        $message .= "<div>state: </div>" . strip_tags($_POST['state']) ."</br>";
        $message .= "</body></html>";
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $message, $headers);
            
            $fname = '';
            $lname = '';
            $company = '';
            $companyEmail = '';
            $city = '';
            $state = '';
            
            $success = '<div class="alert alert-success alert-dismissible" role="alert">
                          
                          We Have Recieved Your Message
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Advva">
        <meta name="robots" content="max-image-preview:large">
        <meta itemprop="name" content="Advva">
        <meta itemprop="url" content="">

        <title>Advva</title>
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md fixed-top bg-light py-3">
                <div class="container">
                <div class="col align-self-center text-start">
                    <img src="/img/Advva Logo.svg" height="60px" alt="Advva Logo">
                </div>
                <div class="col text-end d-none d-md-inline">
                    <ul class="nav justify-content-end align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href=""><h6>About Us</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><h6>How It Works</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><h6>FAQ</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><h6>Contact Us</h6></a>
                        </li>
                    </ul>
                </div>
                <div class="col align-self-center text-end d-md-none">
                    <button class="navbar-toggle" id="toggle" type="button">
                    <svg viewBox="0 0 100 100" width="50">
                        <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                        <path class="line middle"d="m 30,50 h 40" />
                        <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                    </svg>
                    </button>
                    <div class="navbar-new" id="toggle-nav">
                    <ul id="navlinks">
                        <li><a data-text="1" href="#footer">About Us</a></li>
                        <li><a data-text="2" href="#howitworks">How It Works</a></li>
                        <li><a data-text="3" href="#FAQ">FAQ</a></li>
                        <li><a data-text="4" href="#FAQ">Contact Us</a></li>
                    </ul>
                    </div>
                    <div id="bg-circle"></div>
                </div>
                </div>
            </nav> 
        </header>
        
        
        <main class="position-relative overflow-hidden">
            <!-- Go to top circle-->
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
            <!-- The Slider Background video -->
            <img id="sliderimage" src="/img/slidervideo.png" alt="sample">
            <video autoplay muted loop id="slidervideo" class="mt-5">
                <source src="/img/slidervideo.png" type="video/mp4">
            </video>
            <!-- Slider Content -->
            <div class="container mt-5 vh-100 d-flex align-items-center justify-content-center text-center">
                <div class="row justify-content-center">
                <h1 class="text-center mt-5 mb-2 mb-md-0">Billboards</br>
                    <div class="glitch" data-text="Don’t Work !">Don’t Work !</div>
                </h1>
                <h4 class="text-white">Advanced advertising remarkable results</h4>
                <a href="#sign_up"><button class="button1 mt-5 py-2 px-5">Schedule Your Appointment Today</button></a>
                </div>
            </div>
            <!-- Become Driver/Partner Section -->
            <div class="section w-100 d-flex flex-column flex-md-row align-items-center justify-content-center text-center">
                <div class="gsap1 col-12 col-md-6 bpartner d-flex align-items-center justify-content-center">
                    <h2 class="text-white py-5 my-5">Become Partner</h2>
                </div>
                <div class="col-12 col-md-6 bdriver d-flex align-items-center justify-content-center">
                    <h2 class="text-white py-5 my-5">Become Driver</h2>
                </div>
            </div>
            
            <!-- App download Section -->
            <div class="section appdl-bg py-5">
                <div class="container py-5 my-5">
                    <div class="col-12 col-md-5 py-5 my-5">
                        <img class="gsap2 mb-5" src="/img/deals logo.svg" alt="Advva Deals Logo">
                        <h4 class="mb-5 pe-5">Just Download Advva Deals App on Your Android or iOS Mobile in Just one Easy Step & Start Shopping.</h4>
                        <a class="dl-button mt-5 me-3" href="#"><img src="/img/google-play.png" alt="Google Play Download Button" height="46"></a>
                        <a class="dl-button mt-5" href="#"><img src="/img/App-Store.svg" alt="App Store Download Button" height="46"></a>
                    </div>
                    <div class="col-12 col-md-7"></div>
                </div>
            </div>

            <!-- Gallery Section -->
            <div class="section py-5 d-flex flex-column flex-md-row bg1 align-items-center">
                <div class="col-12 col-md-7  overflow-hidden my-5">
                <section class="section-gallery gallery">
                    <div class="row gallery-row"> 
                    <div class="gallery__image-container">
                        <img src="/img/car1.jpg" alt="" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car2.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car3.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car4.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    </div>
                    <div class="row gallery-row">
                    <div class="gallery__image-container">
                        <img src="/img/car5.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car1.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car2.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    <div class="gallery__image-container">
                        <img src="/img/car3.jpg" alt="Advva Gallery Pictures" class="gallery__image">
                    </div>
                    </div>
                </section>
                </div>
                <div class="gsap3 col-12 col-md-4 px-md-5">
                    <h4 class="text-white px-5 mb-4">Advanced Advertising Campaigns</h4>
                    <h5 class="text-white px-5">Advva is an industry leading advertising company that recently patented a powerful never before seen marketing method repeatedly proven to convert like crazy.</h5>
                </div>
            </div>

            <!-- Form Section -->
            <div class="section bg2">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-between py-5">
                        <div class="col-md-5 col-12 mt-5 mt-md-0 py-5 pe-md-5 align-self-center text-center text-md-start">
                            <img class="gsap5" src="/img/canada.png" alt="advva canada">
                            <img class="gsap4" src="/img/usa.png" alt="advva usa">
                            <h4 class="text-white mt-5">Profitable franchising business made available</h4>
                            <h5 class="text-white">Drop us a line. We’ll respond asap.</h5>
                        </div>
                        <div class="col-md-7 col-12 p-4 p-md-5 text-center" id="sign_up">
                            <form id="form" class="mt-0 mt-md-5 mb-5 py-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <?php if (! empty($formErrors)) { ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                    <?php
                                        foreach($formErrors as $error) {
                                            echo $error . '<br/>';
                                        }
                                    ?>
                                </div>
                                <?php } ?>
                                <?php if (isset($success)) { echo $success; } ?>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input id="fname" name="fname" type="name" class="form-control my-3 p-3" placeholder="First Name" value="<?php if (isset($fname)) { echo $fname; } ?>">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input id="lname" name="lname" type="name" class="form-control my-3 p-3" placeholder="Last Name" value="<?php if (isset($lname)) { echo $lname; } ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input id="company" name="company" type="text" class="form-control my-3 p-3" placeholder="Company" value="<?php if (isset($company)) { echo $company; } ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input id="companyEmail" name="companyEmail" type="email" class="form-control my-3 p-3" placeholder="Company Email" value="<?php if (isset($companyEmail)) { echo $companyEmail; } ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input id="city" name="city" type="text" class="form-control my-3 p-3" placeholder="City" value="<?php if (isset($city)) { echo $city; } ?>">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input id="state" name="state" type="text" class="form-control my-3 p-3" placeholder="State" value="<?php if (isset($state)) { echo $state; } ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col text-center text-md-end">
                                        <button type="submit" value="Send" class="w-50 button2 p-3 px-5 fw-bold mt-3" data-bs-target="#form">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile App Section -->
            <div class="section container mt-6 my-5 py-5">
                <div class="row text-center justify-content-center">
                    <h3 class="text-black mb-2">OUR #1 PRIORITY: BRAND SAFETY</h3>
                    <h5 class="w-75">To ensure your brand is safe on the streets, we select the top drivers to represent your name on the road</h5>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-4">
                        <h5 class="text-center">
                            <img class="me-1" src="/img/check.svg" alt="Check icon">
                            Clean Driving
                        </h5>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="text-center">
                            <img class="me-1" src="/img/check.svg" alt="Check icon">
                            Background Checked
                        </h5>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="text-center">
                            <img class="me-1" src="/img/check.svg" alt="Check icon">
                            Top Rated Rideshare Drivers
                        </h5>
                    </div>
                </div>
            </div>
            <div class="section container mbapp p-5 pb-0 text-md-center">
                <img class="img-1 position-absolute" src="/img/section/Mask group.png" alt="Advva Web App">
                <img class="img-2 position-absolute" src="/img/section/Widget 2 1.png" alt="Advva Web App">
                <img class="img-3 position-absolute" src="/img/section/Widget 3 1.png" alt="Advva Web App">
                <img class="img-4 position-absolute" src="/img/section/Widget 4 1.png" alt="Advva Web App">
                <img class="img-5 position-absolute" src="/img/section/Group 480 1.png" alt="Advva Web App">
                <img class="img-6 position-absolute" src="/img/section/Group 481 1.png" alt="Advva Web App">
                <img class="img-7 position-absolute" src="/img/section/Group 482 1.png" alt="Advva Web App">
            </div>

            <!-- FAQs Section -->
            <div class="section bg3">
                <div class="container my-5 overflow-hidden">
                    <div class="row text-center text-md-start">
                        <div class="col-12 col-md-4">
                            <img class="gsap6" src="/img/advva logo2.svg" alt="Advva Logo">
                        </div>
                        <div class="col-12 col-md-8 align-items-center align-self-center">
                            <h4 class="mb-4">FAQs</h4>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <h6 class="py-3">Do I have to pay anything to get started?</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Driver does not pay to become a member, and there is no cost to wrap or unwrap the driver's car!</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <h6 class="py-3">How much money will I make each month?</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">It depends on the size of the campaign. Each campaign has a different payout category. It starts from $300 and goes up to $2000.00 per month.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <h6 class="py-3">I’ve received emails offering to wrap my car and pay upwards of $400 per week Are these real opportunities?</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                        You can choose which area you would like to drive for our campaign. We consider both your selection of the campaign and the business owner's choice.                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingfour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                        <h6 class="py-3">How do I get paid?</h6>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                        After selecting you as a driver, you provide your bank account information to us and we pay you by direct deposit.                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="text-danger fw-bold mt-4" href="">Show More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OurClients Section -->
            <div class="section bg4 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col pb-4 mt-4">
                            <h3 class="gsap7 text-black text-center">Our Clients</h3>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-3 pb-5 imgBox2">
                        <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                            <img src="/img/allacidents.svg" alt="Advva Deals Specifications1">
                        </div>
                        <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                            <img src="/img/i-e.svg" alt="Advva Deals Specifications2">
                        </div>
                        <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                            <img src="/img/lux.svg" alt="Advva Deals Specifications3">
                        </div>
                        <div class="col-md-3 col-12 text-md-center text-start mt-n-1 pt-md-3 pt-5">
                            <img src="/img/mdb.svg" alt="Advva Deals Specifications3">
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class="section d-flex align-items-center text-md-start text-center" id="footer">
            <div class="container">
                <div class="row mt-5 pt-md-5 justify-content-between">
                <div class="col-md-2">
                    <img src="/img/logo footer.svg" alt="Advva Logo for footer" height="72px">
                </div>
                <div class="col-md-2 ">
                    <h6 class="fw-normal mb-md-3 pt-5 pt-md-0">
                    FOLLOW US
                    </h6>
                    <a href="https://www.instagram.com/advvainc/"><img src="/img/instagram.svg" alt="advva deals instagram"></a>
                    <a href="#"><img src="/img/linkedin.svg" alt="advva deals linkedin"></a>
                    <a href="https://www.facebook.com/Advva-103036491994850"><img src="/img/facebook.svg" alt="advva deals facebook"></a>
                </div>
                <div class="col-md-5">
                    <div class="row">
                    <div class="col fs2 px-4 px-md-0 pt-md-0 pt-4">Advva, one of the largest advertising companies in California, is wrapping cars now.
                        You can make extra money every month.</div>
                    </div>
                    <div class="row justify-content-between mt-md-2 pt-4 pt-md-0 px-md-0">
                    <div class="col-md-8 col-12 fs2 fw-bold px-md-0">Advertising & Marketing Agency</div>
                    <div class="col-md-4 col-12 fs2 text-center text-md-end px-md-0">Ⓒ 2022 Advva Inc.</div>
                    </div>
                </div>
                </div>
                <div class="row my-md-5 my-3 pb-md-5 pt-md-4 justify-content-between">
                <div class="col-md-5 d-md-block d-grid">
                    <a class="fs2 pe-md-2" href="">Tersms of Services</a>
                    <a class="fs2 mx-md-5 px-md-4" href="">Privacy Policy</a>
                    <a class="fs2 ps-md-1" href="">Cookies Agreement</a>
                </div>
                <div class="col-md-5 mt-md-0 mt-3 text-md-end text-center px-md-0">
                    <span class="fs2 text-secondary">Design & Develope By <a class="colorFour" href="#">Viana-Studio</a></span>
                </div>
                </div>
            </div>
        </footer>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    
        <script src="/js/main.js"></script>
    </body>
</html>
