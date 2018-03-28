<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/portfolio1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="normalize.css" />

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top" id="banner">
    <div class="container">
        <a class="scrollable" href="top">
            <img  style="width: 99px;padding-left: 10px;margin-top: 6px;" src="http://www.amigio.de/wp-content/uploads/2012/05/Logo.png" alt="qlip">
        </a>
        <button style="margin-top: 22px;;" class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <nav class="navbar-collapse collapse" id="navbar" role="navigation" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right" style="margin-top: -48px;" >
                <li class="active">
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
<main style="background: grey;">
    <header>
        <div  style="font-size: 20px;" class="intro-text">
            <p style=" margin-top: 100px;">
                Front-End Developer and UX/UI designer, with practical experience in project management, branding strategy, and creative direction;  devoted to functional programming and information architecture.
            </p>
            <hr class="star-bright">
            <span class="skills">Web Developer - User Experience Designer - Graphic Artist</span>
        </div>
        <img style="border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYWC5mOyqa0EC7qBYlXQmRl56Lg0Ytzo2S7we6jMyj4QZXg8hB" alt="image">
    </header>
    <section id="portfolio">
        <h2 style="text-align: center;color: grey; font-size: 40px;">PORTFOLIO</h2>
        <hr style="color: grey;" class="star-dark">
        <ul class="grid">
            <li>
                <img src="https://blog.mozilla.org/wp-content/uploads/2017/09/screenshots-onboarding-231-1400x720.png">
            </li>
            <li>
                <img src="http://www.shapecollage.com/screenshots/screenshot-windowsxp-1.png">
            </li>
        </ul>
         <ul class="grid">
            <li>
                <img src="http://www.shapecollage.com/screenshots/screenshot-windowsxp-1.png">
            </li>
            <li>
                <img src="https://blog.mozilla.org/wp-content/uploads/2017/09/screenshots-onboarding-231-1400x720.png">
            </li>
         </ul>
        <ul class="grid">
            <li>
                <img src="http://www.shapecollage.com/screenshots/screenshot-windowsxp-1.png">
            </li>
            <li>
                <img src="http://www.shapecollage.com/screenshots/screenshot-windowsxp-1.png">
            </li>
        </ul>
    </section>
    <section id="contact">

        <h2 style="text-align: center;color: grey;">Contact ME</h2>
        <hr style="color:grey;" class="star-dark">
        <div style="display: flex;  flex-direction: row; justify-content: space-around;align-items: center;color:grey;">
            <form style="width: 35%;  margin-left: 130px;" id="contactForm" novalidate>
                <div class="form-item">
                    <label class="label-custom" for="name">Name</label>
                    <input id="name" type="text" placeholder="Name" required>
                </div>
                <div class="form-item">
                    <label class="label-custom" for="email">Email Address</label>
                    <input id="email" type="text" placeholder="Email" required>
                </div>
                <div class="form-item">
                    <label class="label-custom" for="phone">Phone Number</label>
                    <input id="phone" type="text" placeholder="Phone Number" required>
                </div>
                <div class="form-item">
                    <label class="label-custom" for="message">Message</label>
                    <input id="message" type="text" placeholder="Message" required>
                </div>
                <br>
                <button style="border-color: rgb(216, 216, 216) rgb(209, 209, 209) rgb(186, 186, 186); border-style: solid;sborder-width: 1px;padding: 10px 18px 8px;" type="submit">Send</button>

            </form>
            <div style="width: 44%;  display: flex;flex-direction: column;margin-left: 94px;font-size: 16px;">
                <p style="margin-top: 10px;" >Want to get in touch with me? Be it to request more info about myself or my experience, to ask for my resume, tips on how to solve your sudoku, random questions about the universe and the meaning of life, or even if only for some nice Fika here in stunning Toronto... just feel free to drop me a line anytime.</p>
                <p >I promise to reply A.S.A.P.</p>
                <p style="margin-top: 180px;" >Note: No spam/soliciting pour moi, merci :)</p>
            </div>
        </div>
    </section>
    <div class="scroll-top">
        <a class="button  scrollable" href="#top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</main>
<footer style="background: darkgrey;">
    <div style="display: flex; flex-direction: row; justify-content: space-around;color:white;margin-left: 9%;" id="footer-above">
        <div  >
            <h3>
                About this page
            </h3>
            <p>
                "Made with"<i class="fa fa-fw fa-coffee"></i> "and"
                <i class="fa fa-fw fa-music"></i>
                <br> "by"
                <a href="http://qlip.in">Justin Sane</a>

            </p>
        </div>
        <div>
            <h3 style="margin-left: 34px;">Around The World</h3>
            <ul style="display: flex;flex-direction: row; justify-content: space-evenly;list-style: none;">
                <li>
                    <a class="button social" href="https://www.linkedin.com/in/hallaathrad">
                        <img style="width: 30px;height: 38px;" src="http://v.fastcdn.co/u/1570556-0-LinkedInwhite.png">
                    </a>
                </li>
                <li>
                     <a class="button social" href="https://github.com/hallaathrad">
                         <img style="width: 30px;height: 38px;" src="https://www.yourvillageonline.com/wp-content/uploads/2015/11/google-plus-icon.png">
                     </a>
                </li>
                <li>
                     <a class="button social" href="https://twitter.com/hallaathrad">
                         <img style="width: 30px;height: 38px;" src="https://ton.twimg.com/dtc/a7d9cc62-85d4-47c5-9b72-217d67193c42/_static/imgs/DTC_Services_1h_hero_bg.png">
                     </a>
                </li>
                <li>
                    <a class="button social" href="https://www.flickr.com/photos/hallaathrad/">
                        <img style="width: 30px;height: 38px;" src="http://cascape.ca/wp-content/uploads/2017/07/white-instagram.png">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div style="color: white; font-size: 18px;" id="footer-below">
        qlip ©
        <script>document.write(new Date().getFullYear())</script>
        2018. All Rights Reversed

    </div>
</footer>

</body>
</html>