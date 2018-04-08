<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pallavi Nawani - Backend Developer, with practical experience in API's development,Web Development.">
    <meta name="author" content="Pall104">
    <title>Pallavi Nawani | Personal Portfolio</title>

    <link rel="icon" href="images/pallavi.png" type="image/x-icon"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="css/style.css">
</head>

<body class="index" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Intro banner - Elevator spiel-->
<header class="navbar navbar-default navbar-fixed-top" id="banner">
    <div class="container">
        <a class="scrollable" href="#top">
            <img src="images/profile.jpg" alt="Pallavi Nawani | Backend End Developer" title="Pallavi Nawani | Back End Developer">
        </a>
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="collapse navbar-collapse" id="navbar" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="scrollable" href="#top">About</a>
                </li>
                <li>
                    <a class="scrollable" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="scrollable" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- end banner-->
<a id="top" name="home"></a>
<main>
    <header>
        <p class="fcc-example">This page is created to complete
            <a href="https://www.freecodecamp.com/challenges/build-a-personal-portfolio-webpage" target="_blank">a challenge</a> for learners at
            <a href="https://freecodecamp.com" target="_blank">freeCodeCamp</a>.</p>

        <div class="intro-text">
            <p>
                <span>Backend Laravel Developer </span>with practical experience in API's creation, web development, functionality implementation; interested in functional programming.</p>
            <hr class="emblem-bright">
            <span class="skills">Back End Developer - Experience in mobile app development</span>
        </div>
        <img src="images/profile.jpg" alt="A picture of Kapil posing randomly on a trip."
             title="A picture of Kapil posing randomly on a trip.">
    </header>
    <!-- Portfolio section-->
    <section id="portfolio">
        <h2>Portfolio</h2>
        <hr class="emblem-dark">
        <p>These are some of the mini projects that I have done so far from : <a href="https://javascript30.com/">JavaScript 30 day challenge.</a></p>
        <ul class="grid">
            <li>
                <img src="images/floating-balloons.png" alt="JS Drum Kit">
            </li>
            <li>
                <img src="images/js-clock.png" alt="CSS and JS Clock">
            </li>
            <li>
                <img src="images/Type Ahead.png" alt="Type Ahead">
            </li>
            <li>
                <img src="images/Flex Panel Gallery.png" alt="Flex Panel Gallery">
            </li>
        </ul>
        <p>Briefly put, I pursued an Honors degree in Electronics, then completed my post graduation in Informatics. I interned as a Business Development Executive and now have been working as a Backend Developer in mobile domain.</p>
    </section>
    <!-- end portfolio-->
    <!-- Contact section-->
    <section id="contact">
        <h2>Contact Me</h2>
        <hr class="emblem-dark">
        <div>
            <form id="contactForm" name="sentMessage" novalidate="">
                <div class="form-item control-group">
                    <label for="“name”">Name</label>
                    <input id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-item control-group">
                    <label for="“email”">Email Address</label>
                    <input id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-item control-group">
                    <label for="“phone”">Phone Number</label>
                    <input id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-item control-group">
                    <label for="“message”">Message</label>
                    <textarea id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <br>
                <span>This form is currently out of service.</span>
                <div id="success"></div>
                <button type="submit" disabled>Send</button>
            </form>
            <div>
                <p>Want to get in touch with me? Be it to request more info about myself or my experience, to ask for my
                    Resume or even if only for a coffee just feel free to drop me an email anytime.</p>
                <!-- <p>kapilsharmajmps |at| gmail |dot| com</p> -->
                <p>pallavi.nawani@gmail.com</p>
                <p>You'll get a response A.S.A.P.</p>
                <p>No spam please. :)</p>
            </div>
        </div>
    </section>
    <!-- end contact-->
    <!-- Scroll to Top Button (Only supposed to be visible on small and small screen sizes)-->
    <div class="scroll-top">
        <a class="button scrollable" href="#top">
            <i class="fa fa-fw fa-chevron-up"></i>
        </a>
    </div>
</main>
<!-- Footer-->
<footer>
    <div class="container">
        <div id="disclaimer">Pallavi Nawani
            <span class="flipped">&copy;</span>
            <span>
                    <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</span>
        </div>
        <ul id="social_links">
            <li>
                <a class="button social" href="https://www.linkedin.com/in/pallavi-nawani-b90329113/" title="Linkedin" target="_blank">
                    <i class="fa fa-fw fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a class="button social" href="https://github.com/Pall104" title="Github" target="_blank">
                    <i class="fa fa-fw fa-github"></i>
                </a>
            </li>
            <li>
                <a class="button social" href="https://twitter.com/pallavi_nawani" title="Twitter" target="_blank">
                    <i class="fa fa-fw fa-twitter"></i>
                </a>
            </li>
            <li>
                <a class="button social" href="https://www.facebook.com/pallavi.nawani" title="Facebook" target="_blank">
                    <i class="fa fa-fw fa-facebook"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!-- <aside id="html5badge"><img src="http://www.w3.org/html/logo/badge/html5-badge-v-css3-graphics-semantics.png" width="38" height="170" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, and Semantics" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, and Semantics"></aside>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Contact Form JavaScript-->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!--<!-->
<script src="js/script.js" defer></script>
</body>

</html>