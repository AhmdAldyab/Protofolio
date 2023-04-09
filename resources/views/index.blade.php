<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Aldayb</title>
    <!-- Main Template Css file -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- Render All elements Normally  -->
    <link rel="stylesheet" href="{{ asset('assets/css/normlize.css') }}">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Start header -->
    <div class="header">
        <div class="container">
            <img src="{{ asset('assets/images/logo.jpg') }}" class="logo" alt="">
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contect">Contect</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End header -->
    <!-- start landing section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Hello There !</h1>
            <p>I am a web developer and website designer</p>
        </div>
    </div>
    <!-- end landing section -->
    <!-- start features -->
    <div class="features">
        <div class="container">
            <div class="feat">
                <i class="fas fa-magic fa-3x"></i>
                <h3>Implement your idea</h3>
                <p>We are ready to implement your idea, whatever it is, and you will get a great result</p>
            </div>
            <div class="feat">
                <i class="fas fa-gem fa-3x"></i>
                <h3>The work will be done quickly</h3>
                <p>You will carry out work at record speed with high skills and user-friendly design</p>
            </div>
            <div class="feat">
                <i class="fas fa-globe fa-3x"></i>
                <h3>Universal model</h3>
                <p>A model is designed according to international standard conditions</p>
            </div>
        </div>
    </div>
    <!-- end features -->
    <!-- start services -->
    <div class="services" id="services">
        <div class="container">
            <h2 class="special-heading">services</h2>
            <p>be a good man for devloped yourself</p>
            <div class="services-content">
                <div class="col">
                    <div class="sev">
                        <i class="fas fa-palette fa-2x"></i>
                        <div class="text">
                            <h3>Web Design</h3>
                            <p>Using HTML, CSS and the Bootstrap framework, the most famous framework in the world in web design</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sev">
                        <i class="fab fa-sketch fa-2x"></i>
                        <div class="text">
                            <h3>Backend Laravel</h3>
                            <p>The most reliable and secure framework by the user, which is based on the PHP language</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="image image-nono">
                        <img src="{{ asset('assets/images/sky.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end services -->
    <!-- start portofolio -->
    <div class="portofolio" id="portfolio">
        <div class="container">
            <h2 class="special-heading">portofolio</h2>
            <p>be a good man for devloped yourself</p>
            <div class="portofolio-content">
                <div class="card">
                    <img src="images/po1.jpg" alt="">
                    <div class="info">
                        <h3>Project Here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa, i</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/po2.jpg" alt="">
                    <div class="info">
                        <h3>Project Here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa, i</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/po3.jpg" alt="">
                    <div class="info">
                        <h3>Project Here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ipsa, i</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end portofolio -->
    <!-- start about -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="special-heading">about</h2>
            <p>be a good man for devloped yourself</p>
            <div class="about-content">
                <div class="image">
                    <img src="{{ asset('assets/images/po2.jpg') }}" alt="">
                </div>
                <div class="text">
                    <p>We are a team with great experience and we have two specializations in frontend and backend. Above are some implemented models and you can try them
                    </p>
                    <hr>
                    <p>Skills</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- start contect -->
    <div class="contect" id="contect">
        <div class="container">
            <h2 class="special-heading">contect</h2>
            <p>We are born to create</p>
            <div class="info">
                <p class="lable">feel free to drop us a line at :</p>
                <a href="mailto:ahmdaldyab744@gmail.com" class="link">Ahmdaldyab744@gmail.com</a>
                <div class="social">
                    find us on social networks
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end contect -->
    <div class="footer">
        &copy; 2021 <span>ahmad</span> All Right Reserve
    </div>
    <!-- toastr -->
    <script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
    <!-- validation -->
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>

</body>
</html>