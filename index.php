<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/header&footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>DOCUFIX</title>
</head>
<body>
    <!--Header-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-5 ml-3" href="#"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto px-5">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="about_us.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tools
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-justify" href="./fileUpload.html">Compare files</a>
                            <a class="dropdown-item text-justify" href="./grammarChecker.html">Grammar Check</a>
                            <a class="dropdown-item text-justify" href="./fileDuplicate.html">Check for Duplicates</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#">Get Started</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="banner-wrapper">
        <div class="banner" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">
            <div class="banner-text">
                <h3>Your Online Document Comparison Solution</h3>
                <p>Compare documents content and find out the differences in each content of the files without much stress</p>
            </div>
            <button class="b-btn comp-btn"><a href="./fileUpload.html">Compare files</a></button>
            <button class="b-btn dup-btn"><a href="./fileDuplicate.html">Check for duplicates</a></button>
        </div>

        <div class="banner-img">

        </div>
    </section>

    <section class="content-wrapper">
        <div class="content">
            <!-- <div class="about-wrapper">
                <h3>About Docufix</h3>
                <div class="about-content-wrapper"></div>
            </div> -->
            
            <div class="feature-wrapper">
                <h3>Features Of Docufix</h3>
                <div class="feature-content-wrapper">
                    <div class="feature-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <div class="feature-content-asset asset-1"></div>
                        <h2>Plagiarism Checker</h2>
                        <p>Plagiarism checker detects plaigiarism in your text and checks for other writing issues. Our plagiarism checker flags specific sentences and provides reference information about the source, calculate an overall orginality score for your document. So you don't need to worry we have you covered.</p>
                    </div>
                    <div class="feature-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <div class="feature-content-asset asset-2"></div>
                        <h2>Word Duplicate</h2>
                        <p>One of the main problem in document is that most of the words that are duplicated also appear in the previous line, which makes it difficult to achieve your goal. If you'd want to remove all duplicated words, then it would not be that difficult by using our tool, all duplicated file will be reviewed.</p>
                    </div>
                    <div class="feature-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-easing="ease-in-out">
                        <div class="feature-content-asset asset-3"></div>
                        <h2>File Checker</h2>
                        <p>We help you compare files and texts, and generate differences in a visual text format which is easy to manage and understand. Comparing hundreds of files can be a tedious task, there are high chances that you would miss out on something. Here we make that easy for you.</p>
                    </div>
                </div>
            </div>

            <div class="plan-wrapper">
                <h3>Pricing Offer</h3>
                <div class="plan-content-wrapper">
                    <div class="lower-plan" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="plan-content">
                            <span class="rectangle r1"></span>
                            <p class="p-top p-top-1">FREE</p>
                            <div class="price-wrapper">
                                <h2 class="price">FREE</h2>
                            </div>
                            <div class="plan-year">
                                <button class="p-btn p-btn-1"><a href="#">1 year</a></button>
                                <button class="p-btn p-btn-2"><a href="#">2 years</a></button>
                                <button class="p-btn p-btn-3"><a href="#">3 years</a></button>
                            </div>
                            <div class="plan-text">
                                <p><i class="fas fa-check basic-fa"></i>Single Users</p>
                                <p><i class="fas fa-check basic-fa"></i><span class="pt">10</span> Plaigiarism Check</p>
                                <p><i class="fas fa-check basic-fa"></i><span class="pt">5</span> Grammer Check</p>
                            </div>
                            <button class="pbtn pbtn-1"><a href="#">Select</a></button>
                        </div>
                    </div>

                    <div class="plan-content" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="rectangle r2"></span>
                        <p class="p-top p-top-2">BASIC</p>
                        <div class="price-wrapper">
                            <span>$</span><h2 class="price">90</h2>
                        </div>
                            
                            <div class="plan-year">
                                <button class="p-btn p-btn-1"><a href="#">1 year</a></button>
                                <button class="p-btn p-btn-2"><a href="#">2 years</a></button>
                                <button class="p-btn p-btn-3"><a href="#">3 years</a></button>
                            </div>

                            <div class="plan-text">
                                <p><i class="fas fa-check pro-fa"></i>Up to 5 Users</p>
                                <p><i class="fas fa-check pro-fa"></i><span class="pt">50</span> Plaigiarism Check</p>
                                <p><i class="fas fa-check pro-fa"></i><span class="pt">25</span> Grammer Check</p>
                                <p><i class="fas fa-check pro-fa"></i>Free Ebooks</p>
                            </div>

                            <button class="pbtn pbtn-2"><a href="#">Select</a></button>
                    </div>

                    <div class="lower-plan" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="plan-content">
                            <span class="rectangle r3"></span>
                            <p class="p-top p-top-3">PRO</p>
                            <div class="price-wrapper">
                                <span>$</span><h2 class="price">130</h2>
                            </div>
                            <div class="plan-year">
                                <button class="p-btn p-btn-1"><a href="#">1 year</a></button>
                                <button class="p-btn p-btn-2"><a href="#">2 years</a></button>
                                <button class="p-btn p-btn-3"><a href="#">3 years</a></button>
                            </div>
                            <div class="plan-text">
                                <p><i class="fas fa-check prem-fa"></i>Unlimited Users</p>
                                <p><i class="fas fa-check prem-fa"></i>Unlimited Plaigiarism Check</p>
                                <p><i class="fas fa-check prem-fa"></i>Unlimited Grammer Check</p>
                            </div>
                            <button class="pbtn pbtn-3"><a href="#">Select</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer id="footer">
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a class="text-center" href="#">&copy; 2019 Copyright HNG Internship</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="faq.html">FAQ</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="feedback.html">Feedback</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="privacy.html">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.html">Terms of Service</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var SCROLLING_NAVBAR_OFFSET_TOP = 100;
        $(window).on("scroll", function() {
            var $navbar = $(".navbar");
        
            if ($navbar.length) {
            if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
                $(".scrolling-navbar").addClass("top-nav-collapse");
            } else {
                $(".scrolling-navbar").removeClass("top-nav-collapse");
            }
            }
        });
    </script>
</body>
</html>
