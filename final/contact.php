<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Owen Avon">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Contact</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="icon" href="../resources/images/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="./vendors/bootstrap-5.3.3/css/bootstrap.css" rel="stylesheet">
    <link href="./vendors/mbd5-7.2.0/css/mdb.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb929aab00.js" crossorigin="anonymous"></script>

    <link href="./resources/css/style.css" rel="stylesheet">
</head>
<body>

   
    <!-- Masthead -->
    <header class="masthead">
    </header>
    
    
    <!--NAV-->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">  
                <ul class="navbar-nav justify-content-center m-1">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./design.html">Design</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./web.html">Web</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./video.html">Video</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./tangible.html">Tangible</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
<!--
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Fran&ccedil;ais</a>
                    </li>
-->
                </ul>
            </div>
            
        </div>
    </nav>

    
    <!--Welcome-->
    <section class="showcase features-icons bg-light" id="welcome">
        <header class="title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-5 mb-5">
                        <div class="mt-5">
                            <h1 class="section">Contact</h1>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 mb-5">
                        <p class="mx-auto ps-5">I enjoy learning, exploring, and experimenting in the field of creative technology. Let me know if you require assistance with your digital presence. I offer freelance creative services to individuals, and small businesses in Montreal, and Ottawa-Gatineau.</p>
                    </div>
                    
                    <div class="col-lg-4 d-flex justify-content-center">
                        <ul class="list-inline mb-5">
                            <li class="list-inline-item mr-3">
                                <a href="https://www.linkedin.com/in/owenavon" target="_blank"><i class="fab fa-linkedin fa-2x fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item mr-3">
                                <a href="https://www.instagram.com/o_avon_/?hl=en" target="_blank"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.behance.net/owen48ea5d" target="_blank"><i class="fab fa-behance-square fa-2x fa-fw"></i></a>
                            </li>
                               <li class="list-inline-item">
                                <a href="./resources/pdf/resume-owen_avon-2023.pdf" target="_blank"><i class="fa-solid fa-file fa-2x fa-fw"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </header>
    </section>
    
    <!--Contact Form-->
<!--
    <section class="call-to-action bg-light" id="contact">
       <div class="container marketing">
            <div class="row justify-content-center">
               <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-5 mb-5">
                            <div class="mt-5">
                                <h1 class="section-white">Get in Touch</h1>
                            </div>
                        </div>
                        <div class="col-lg-6 mx-auto">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
-->
   
   
   
    <!-- Contact Form -->
    <section class="call-to-action" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="mt-5">
                        <h1 class="section-white">Get in Touch</h1>
                    </div>
                </div>
               
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form id="contact-form" name="contact-form" action="./action/action-send.php" method="POST">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class=""></label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="mx-auto">Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">
                                    <?php
                                        if(isset($_GET["email"]) && $_GET["email"] == "error") {
                                            echo " <span style='color: red;'>(Email is required)</span>";
                                        }
                                    ?>
                                    </label>
                                    <input type="email" class="form-control" id="email" value="<?php
                                        if(isset($_GET["email"]) && $_GET["email"] != "error") {
                                            echo $_GET["email"];
                                        }
                                    ?>" name="email">
                                    <label for="email" class="mx-auto">Email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mt-0">
                                    <label for="message">
                                    <?php
                                        if(isset($_GET["message"]) && $_GET["message"] == "error") {
                                            echo " <span style='color: red;'>(Message is required)</span>";
                                        }
                                    ?>
                                    </label>
                                    <textarea class="form-control md-textarea" rows="5" id="comment" name="message"><?php
                                        if(isset($_GET["message"]) && $_GET["message"] != "error") {
                                            echo $_GET["message"];
                                            }
                                        ?></textarea>
                                    <label for="message" class="mx-auto">Message</label>
                                </div>
                            </div>
                        </div>

                    </form>
                    <br>
                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
    <!--Up Arrow-->
    <section class="title text-center showcase" id="web">
        <header>
            <div class="container-fluid p-0">
                
                <div class="col-lg-12 p-5 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" id="return-to-top"><i class="fa-solid fa-chevron-up fa-2x fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </header>
    </section>
  
  
    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-3 text-center text-lg-left my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; 2025 Owen Avon &mdash; All Rights Reserved</p>
                </div>
                <div class="col-lg-6 p-3 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://www.linkedin.com/in/owenavon" target="_blank"><i class="fab fa-linkedin fa-2x fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="https://www.instagram.com/o_avon_/?hl=en" target="_blank"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.behance.net/owen48ea5d" target="_blank"><i class="fab fa-behance-square fa-2x fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="./resources/js/script.js"></script>
    <script src="./vendors/bootstrap-5.3.3/js/bootstrap.js"></script>
</body>
</html>