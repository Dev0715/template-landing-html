<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/fancybox.min.css">
        <link rel="stylesheet" href="css/odometer.min.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <link rel="stylesheet" href="css/odometer.min.css">
        <title>Contact Form Send - 631 Tech Inc</title>
        <meta name="description" content="Send Form">
    </head>
    <body>
    <div class="page-preloader">
            <div class="align-center">
              <img class="preloader-logo shake shake-slow shake-constant" src="img/logo-sticky.png" loading="" alt="Logo" />
            </div>
          </div>
        <div class="navigation-menu">
            <div class="inner">
            <div class="side-menu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>

                  
                  
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
          </div>
        </div>  
            <div class="sides">
            </div>
            </div>
        </div>
        <aside class="left-side">
         <div class="logo">
             <img src="img/logo-sticky.png" alt="Image">
         </div>
          <ul>
            <li><a href="https://www.instagram.com/eastendtechsolutions">INSTAGRAM</a></li>
            <li><a href="https://eastendtechsolutions.com/services#">FACEBOOK</a></li>
            <li><a href="https://www.youtube.com/@eastendtechsolutions">YOUTUBE</a></li>
            <li><a href="https://twitter.com/EETechSolutions">TWITTER</a></li>
          </ul>
          <a href="#top" class="gotop"><img src="img/go-top.png" alt="Image"></a> 
        </aside>
        <header class="header">
          <nav class="navbar">
              <div class="inner">
            <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="Image"></a> </div>
            <div class="phone"> <a href="tel:8336318324">(833) 631-8324</a> </div>
            <div class="main-menu">
              <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>

                  
                  
                  <li><a href="contact-us.html">Contact</a></li>
              </ul>
            </div>
            <div class="hamburger-menu" id="hamburger-menu">
              <div class="burger">
                <svg id="burger-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                  <title>Show / Hide Navigation</title>
                  <rect class="burger-svg__base" width="50" height="50"/>
                  <g class="burger-svg__bars">
                    <rect class="burger-svg__bar burger-svg__bar-1" x="14" y="18" width="22" height="2"/>
                    <rect class="burger-svg__bar burger-svg__bar-2" x="14" y="24" width="22" height="2"/>
                    <rect class="burger-svg__bar burger-svg__bar-3" x="14" y="30" width="22" height="2"/>
                  </g>
                </svg>
              </div>
            </div>
                  </div>
          </nav>
          <div class="page-title">
            <div class="container">
         <h2>                    <?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['message'])) {
    $ad = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $mesaj = $_POST['message'];
  
    if(empty($ad) || empty($email) || empty($telefon) || empty($mesaj)) {
       echo 'Please do not leave blank';
    } else {
     $toEmail = 'Support@631.Tech';
     $emailSubject = 'New email from your contant form';
       echo 'Thank you.';
    }
 } else {
    echo 'Please use the form';
 }
 ?></h2>
           <h4><a href="index.html">Here you can return to the home page.
</a></h4>
         </div>
         <!-- end container -->
          </div>
        </header>
        <main>
        </main>
            <!--Footer Alanı-->
            <footer class="footer">
                <!--footer menu-->           
                <div class="tablo">
                    <div class="ozel">
                        <div class="tablo--1-ve-3">
                            <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> CONTACT </h2> 
                            <div class="footerss">
                              <div>
                                <p><strong>PHONE:</strong>&nbsp;(833) 631-8324</p>
                                <p><strong>EMAIL:</strong>&nbsp;Support@631.Tech</p>
                                <div>
                                  <p><strong>ADDRESS:&nbsp;</strong></p>
                                  <div>
                                    <p>631 Tech Inc.</p>
                                    <p>1087 Route 58 #1043</p>
                                    <p>Riverhead, NY 11901</p>
                                  </div>
                                </div>
                              </div>
                            </div>                  
                        </div>
                        <div class="tablo--1-ve-3">
                            <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> LINKS </h2> 
                            <div class="footer__menu">
                                <ul class="footer__list"> 
                                    <li class="footer__item"><a href="index.html" class="footer__link">Home Page</a></li>
                                    <li class="footer__item"><a href="about-us.html" class="footer__link">About Us</a></li>
                                    <li class="footer__item"><a href="services.html" class="footer__link">Services</a></li>
<li class="footer__item"><a href="privacy.html" class="footer__link">Privacy Policy</a></li>
<li class="footer__item"><a href="tos.html" class="footer__link">Terms of Service</a></li>
                                    
                                    
                                    <li class="footer__item"><a href="contact-us.html" class="footer__link">Contact</a></li>
                                </ul>      
                            </div>                   
                        </div>
                    <div class="tablo--1-ve-3">
                        <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> SOCIAL MEDIA </h2> 
                        <p class="footer__sosyal">
                                <a href="https://eastendtechsolutions.com/services#" class="footer__sosyallink">.facebook</a>&nbsp;
                                <a href="https://www.instagram.com/eastendtechsolutions" class="footer__sosyallink">.instagram</a> &nbsp;
                                <a href="https://www.youtube.com/@eastendtechsolutions" class="footer__sosyallink">.twitter</a>&nbsp;
                                <a href="https://eastendtechsolutions.com/services#" class="footer__sosyallink">.linkedin</a>
                    </div></div>
                </div>
                <div class="ozel-copyright">
                    <div class="footer__copyright">
                    &copy; 2022 - 2024 - 631 Tech Inc.
                    </div>
                </div>
                <script src="js/jquery.min.js"></script> 
                <script src="js/imagesloaded.pkgd.min.js"></script> 
                <script src="js/isotope.min.js"></script> 
                <script src="js/swiper.min.js"></script> 
                <script src='js/TweenMax.min.js'></script> 
                <script src='js/odometer.min.js'></script> 
                <script src='js/fancybox.min.js'></script> 
                <script src='js/wow.min.js'></script> 
                <script src='js/scripts.js'></script>  
                <script src="js/pointer.js"></script>
                <!--Cursor Script-->                    
                <script>
                    init_pointer({
                        
                    })
                </script>
                <script>
                    $(document).ready(function() {
                    $('.tab-content').each(function(i) {
                        var tabTitle = $(this).data('tab-title');
                        var current = $(this).hasClass('current') ? "current" : "";
                        var newTab = $('<li class="tab-link"></li>');
                        newTab.html(tabTitle)
                        .addClass(current)
                        .attr('data-tab', $(this).attr('id'));
                        $('ul.tabs').append(newTab)
                    })
  
                    $(document).on('click', '.tabs li', function() {
                        var tab_id = $(this).attr('data-tab');
  
                        $('.tabs li').removeClass('current');
                        $('.tab-content').removeClass('current');
  
                        $(this).addClass('current');
                        $("#" + tab_id).addClass('current');
                    });
  
                    })
                </script>
                <script>
                setTimeout(function() {
                    $('.page-preloader').toggleClass("loaded");
                    $('.app').removeClass('disabled');
                }, 1500 );
            </script>
            </footer>
        </main>
    </body>
  </html>
