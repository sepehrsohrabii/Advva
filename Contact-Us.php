<?php
    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Assign Variables
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
        $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
        
        // Creating Array of Errors
        $formErrors = array();
        if (strlen($fname) <= 3) {
            $formErrors[] = 'Username Must Be Larger Than <strong>3</strong> Characters';
        }
        
        // If No Errors Send The Email [ mail(To, Subject, Message, Headers, Parameters) ]
        
        // $headers = 'From: ' . $email . '\r\n';
        $headers = 'From: advva@rs018.webhostbox.net' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $myEmail = 'info@advva.com';
        $subject = 'Contact Form';
        $message = "<html><body>";
        $message .= "<div>First Name: </div>" . strip_tags($_POST['fname']) ."</br></br>";
        $message .= "<div>Last Name: </div>" . strip_tags($_POST['lname']) ."</br></br>";
        $message .= "<div>Company Email: </div>" . strip_tags($_POST['email']) ."</br></br>";
        $message .= "<div>Company Name: </div>" . strip_tags($_POST['company']) ."</br></br>";
        $message .= "<div>Message: </div>" . strip_tags($_POST['msg']) ."</br>";
        $message .= "</body></html>";
        
        if (empty($formErrors)) {
            
            mail($myEmail, $subject, $message, $headers);
            
            $fname = '';
            $lname = '';
            $email = '';
            $company = '';
            $msg = '';
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
        <meta name="apple-mobile-web-app-title" content="Advva - Contact Us">
        <meta name="robots" content="max-image-preview:large">
        <meta itemprop="name" content="Advva - Contact Us">
        <meta itemprop="url" content="">

        <title>Advva - Contact Us</title>
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/contactus.css">
        
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
                            <a class="nav-link" aria-current="page" href="/About-Us"><h6>About Us</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#APP"><h6>How It Works</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/FAQs"><h6>FAQ</h6></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Contact-Us"><h6>Contact Us</h6></a>
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
                        <li><a data-text="1" href="/About-Us">About Us</a></li>
                        <li><a data-text="2" href="#APP">How It Works</a></li>
                        <li><a data-text="3" href="/FAQs">FAQ</a></li>
                        <li><a data-text="4" href="/Contact-Us">Contact Us</a></li>
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
            <div class="bg1 vh-100 d-flex align-items-center first-section-py">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 col-md-4 border-end border-secondary pe-md-5 py-md-4">
                            <img src="/img/location-icon.svg" alt="Advva Address">
                            <h5 class="fs-5 color2 mt-3"><a class="color2" href="https://goo.gl/maps/6TfHoRU8LJct8k8C8">6345 Balboa Blvd. Building 3, Suite 257 Encino, CA 91316</a></h5>
                        </div>
                        <div class="col-12 col-md-4 my-md-0 my-5 border-end border-secondary px-md-5 py-md-4">
                            <img src="/img/phone-icon.svg" alt="Advva Address">
                            <h5 class="fs-5 color2 mt-3"><a class="color2" href="tel:+1 (818) 400-5405">+1 (818) 400-5405</a></h5>
                        </div>
                        <div class="col-12 col-md-4 mt-7 ps-md-5 py-md-4">
                            <img src="/img/mail-icon.svg" alt="Advva Address">
                            <h5 class="fs-5 color2 mt-3"><a class="color2" href="mailto:info@advva.com">info@advva.com</a></h5>
                        </div>
                    </div>
                    <div class="section row justify-content-between">
                        <div class="col-12 col-md-4 text-center text-md-start align-self-center mt-5 mt-md-0">
                            <h2 class="mb-4 color1">Get In Touch !</h2>
                            <h5>Advva can easily help your business grow by giving your brand massive exposure for extremely affordable rates.</h5>
                        </div>
                        <div class="col-12 col-md-7">
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
                                  <div class="col-12 col-md-6">
                                    <input id="company" name="company" type="name" class="form-control my-3 p-3" placeholder="Company" value="<?php if (isset($company)) { echo $company; } ?>">
                                  </div>
                                  <div class="col-12 col-md-6">
                                    <input id="email" name="email" type="email" class="form-control my-3 p-3" placeholder="Company Email" value="<?php if (isset($email)) { echo $email; } ?>">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <textarea name="msg" id="msg" class="form-control my-3 p-3" rows="5" placeholder="Message"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col text-center text-md-end">
                                    <button type="submit" value="Send" class="w-50 button2 p-3 px-5 fw-bold mt-3" data-bs-target="#form" style="background-color:#00662F;">Submit</button>
                                  </div>
                                </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section w-100">
                <div class="gallery-section">
                <div class="gallery-item gallery-item1">
                <h1 class="w-100 h-100 d-flex align-items-center justify-content-center gallery-text-bg gallery-text-bg1"><span class="gallery-text gallery-text1">Toronto</span></h1>
                </div>
                <div class="gallery-item gallery-item2">
                <h1 class="w-100 h-100 d-flex align-items-center justify-content-center gallery-text-bg gallery-text-bg2"><span class="gallery-text gallery-text2">Dubai</span></h1>
                </div>
                <div class="gallery-item gallery-item3">
                <h1 class="w-100 h-100 d-flex align-items-center justify-content-center gallery-text-bg gallery-text-bg3"><span class="gallery-text gallery-text3">Istanbul</span></h1>
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
                    <a class="fs2 pe-md-2" href="/Terms-of-Use">Terms of Use</a>
                    <a class="fs2 mx-md-5 px-md-4" href="/Privacy-Statement">Privacy Statement</a>
                    <a class="fs2 ps-md-1" href="/Terms-of-Sale">Terms of Sale</a>
                </div>
                <div class="col-md-5 mt-md-0 mt-3 text-md-end text-center px-md-0">
                    <span class="fs2 text-secondary">Design & Develope By <a class="colorFour" href="https://viana-studio.com/">Viana-Studio</a></span>
                </div>
                </div>
            </div>
        </footer>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    
        <script src="/js/main.js"></script>
        <script src="/js/contactus.js"></script>
    </body>
</html>