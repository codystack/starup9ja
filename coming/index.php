<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coming Soon :: Starup9ja&trade;</title>
        <meta property="og:locale" content="en_US" />
        <meta property="og:url" content="https://webify.com.ng/"/>
        <meta property="og:site_name" content="Webify" />
	    <meta property="og:type" content="website" />
        <meta property="og:title" content="TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer." />
        <meta name="og:description" content="Webify is a digital/branding agency that collaborates with brands to increase their value and impact through branding, user interface and experience design, app development and web development.">
        <meta name="keywords" content="Creative Agency,Lagos,Nigeria,Port Harcourt,Website Development,Application Development,Software Development,Build Website,Wordpress,Software,Developer,Development,Programmer,Programming,Coder,Coding,Blogger,Blogging,Digital,Creator,Creation,Graphic Designer,Product Designer,Product,Graphics,Branding,Lekki,Abuja,Bootstrap,Angular,Vue,Frontend,Front-end,UX,UI,UI/UX">
        <meta property="og:image" content="https://i.imgur.com/uIvHnMQ.jpg">
        <link rel="icon" type="image/png" href="https://i.imgur.com/Ek7KKbW.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendor/swiper/dist/css/swiper.min.css" />
        <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="assets/css/themebau.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <!-- END: Styles -->
        <!-- jQuery -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body class="bg-dark">

        <div class="content-wrap">
            <div class="min-vh-100 text-center pt-20 pb-40 d-flex align-items-center">
                <div class="background show-on-scroll" data-show-duration="400">
                    <div class="background-video jarallax" data-jarallax-video="mp4:assets/videos/coming-soon.mp4"></div>
                    <div class="background-color" style="background-color: #0e0e0e; opacity: .4;"></div>
                </div>
                <div class="container h-100 text-white d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-between w-100">
                        <div>
                        <img width=" " src="https://i.imgur.com/xszpgOw.png" style="width: 250px" alt="" class="pb-6">
                            <p class="mb-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Anticipate Coming Soon</p>
                        </div>
                        <div class="mt-60 mb-60 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                            <div class="countdown h2 text-white d-flex justify-content-center" data-end="2021-05-01 12:00" data-timezone="EST"></div>
                            <button onclick="goBack()" class="d-none d-sm-inline-block btn btn-white btn-with-ball ml-auto mr-40 mr-lg-0 order-2 order-lg-3">Go Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>
        <script src="assets/vendor/animejs/lib/anime.min.js"></script>
        <script src="assets/vendor/rellax/rellax.min.js"></script>
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
        <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
        <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/themebau.min.js"></script>
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
        <script type="text/javascript">
            $('.countdown').each(function()
            {
                const $this = $(this);
                const tz = $this.attr('data-timezone');
                let end = $this.attr('data-end');
                end = moment.tz(end, tz).toDate();
                $this.countdown(end, function(event)
                {
                    $this.html(event.strftime(['<div class="countdown-item">', '<span>%D</span>', '<span>days</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%H</span>', '<span>hours</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%M</span>', '<span>minutes</span>', '</div>', '<div class="countdown-separator">', '<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">', '<path d="M2.41477 18.3161C1.75473 18.3161 1.18726 18.0826 0.712358 17.6158C0.237453 17.1409 0 16.5694 0 15.9013C0 15.2412 0.237453 14.6778 0.712358 14.2109C1.18726 13.736 1.75473 13.4986 2.41477 13.4986C3.07481 13.4986 3.64228 13.736 4.11719 14.2109C4.59209 14.6778 4.82955 15.2412 4.82955 15.9013C4.82955 16.344 4.71686 16.7505 4.49148 17.1207C4.27415 17.483 3.98438 17.7727 3.62216 17.9901C3.25994 18.2074 2.85748 18.3161 2.41477 18.3161ZM2.41477 4.81747C1.75473 4.81747 1.18726 4.58404 0.712358 4.11719C0.237453 3.64228 0 3.07079 0 2.4027C0 1.74266 0.237453 1.17921 0.712358 0.712357C1.18726 0.237452 1.75473 0 2.41477 0C3.07481 0 3.64228 0.237452 4.11719 0.712357C4.59209 1.17921 4.82955 1.74266 4.82955 2.4027C4.82955 2.84541 4.71686 3.25189 4.49148 3.62216C4.27415 3.98438 3.98438 4.27415 3.62216 4.49148C3.25994 4.70881 2.85748 4.81747 2.41477 4.81747Z" fill="currentColor"/>', '</svg>', '</div>', '<div class="countdown-item">', '<span>%S</span>', '<span>seconds</span>', '</div>'].join('')));
                });
            });
        </script>
    <?php
    if (isset($_SESSION['subscribe_message']))
    {
    ?>
        <script>
            swal({
            title: "<?php echo $_SESSION['subscribe_message_title']; ?>",
            text: "<?php echo $_SESSION['subscribe_message']; ?>",
            icon: "success",
            button: false,
            timer: 4000,
            });
        </script>
    <?php
        unset($_SESSION['subscribe_message']);
    }
    ?>
    </body>

</html>