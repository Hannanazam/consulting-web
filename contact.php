<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from weblearnbd.net/tphtml/arvilax/arvilax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 21:03:32 GMT -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>ALVI CONSULTING ENGINEERS</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/backtotop.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/ui-icon.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <?php require_once('contact.php'); ?>
</head>

<body>

   <script>
      function alertWarning(){
        $(document).ready(function(){
            // $('.alert-warning').addClass("show");
            // $('.alert-warning').removeClass("hide");
            $('.alert-warning').addClass("showAlert");
            // setTimeout(function(){
            //   $('.alert-warning').removeClass("show");
            //   $('.alert-warning').addClass("hide");
            // },5000);
        });
        }
      function alertSuccess(){
        $(document).ready(function(){
            // $('.alert-success').removeClass("hide");
            $('.alert-success').addClass("showAlert");
              //  $('.alert-success').addClass("show");
            // setTimeout(function(){
            //   $('.alert-success').removeClass("show");
            //   $('.alert-success').addClass("hide");
            // },5000);
        });
    
        }
    </script>
  
  
  
  
 
<?php
if (isset($_POST["send"])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];


   $from = "hannanazam200@gmail.com";

   $message = $name . '' . $phone . ' ' . $subject . ' ' . $email . '' . $message;

   $to = "hannanazam200@gmail.com";
   $headers = "From:" . $from;

   if ($name != "" && $subject != "" && $email != "" && $message != "" && $phone != "") {
      if (mail($to, $subject, $message, $headers)) {

         echo '<script type="text/javascript">alertSuccess() </script>';
      } else {
         echo '<script type="text/javascript">alertWarning() </script>';
      }
   }
}
?>

   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- <div id="cursor"></div>
   <div id="circle"></div> -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->
   <div class="mouseCursor cursor-outer"></div>
   <div class="mouseCursor cursor-inner"><span>Drag</span></div>
   <!-- header area start -->
   <header>
      <div id="header-sticky" class="header__area header__transparent pr-90 pl-90 header-sticky-active">
         <div class="header__main" id="header-sticky">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-lg-2 col-md-4 col-7">

                     <div class="logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class=" col-lg-8 col-md-4 d-none d-md-block">
                     <div class="main-menu text-center">
                        <nav id="mobile-menu">
                           <ul>
                              <li>
                                 <a href="index.html">Home</a>
                              </li>
                              <li>
                                 <a href="about.html">About us</a>
                              </li>
                              <li>
                                 <a href="client.html">Our Clients</a>
                              </li>
                              <li>
                                 <a href="associates.html">Our Associates</a>
                              </li>
                              <li>
                                 <a href="project.html">Project</a>
                              </li>
                              <li>
                                 <a href="gallery.html">Gallery</a>
                              </li>
                              <li>
                                 <a href="team.html">Our Team</a>
                              </li>
                              <li>
                                 <a href="contact.html">Contact us</a>
                              </li>

                              <!-- <li class="has-dropdown">
                                      <a href="#">Pages</a>
                                      <ul class="submenu">
                                         <li><a href="team.html">Team</a></li>
                                         <li><a href="team-details.html">Team details</a></li>
                                         <li><a href="service.html">Service</a></li>
                                         <li><a href="service-details.html">service details</a></li>
                                         <li><a href="price.html">Price</a></li>
                                         <li><a href="contact.html">contact</a></li>
                                         <li><a href="faq.html">Faq</a></li>
                                      </ul>
                                   </li>
                                   <li class="has-dropdown">
                                      <a href="project.html">Portfolio</a>
                                      <ul class="submenu">
                                         <li><a href="project.html">Portfolio</a></li>
                                         <li><a href="project-details.html">Portfolio Detials</a></li>
     
                                      </ul>
                                   </li>
                                   <li class="has-dropdown">
                                      <a href="blog.html">Blog</a>
                                      <ul class="submenu">
                                         <li><a href="blog.html">blog</a></li>
                                         <li><a href="blog-details.html">blog Detials</a></li>
     
                                      </ul>
                                   </li> -->
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-5">
                     <div class="header__main_right d-flex justify-content-end align-items-center">
                        <div class="tp-header-search-icons normal-search mr-80 p-relative">
                           <div class="search-btn-wrap">
                              <button class="button-search-toggle position-relative">
                                 <i class="header_search-button text-white far fa-search"></i>
                                 <i class="header_search-close text-white far fa-times"></i>
                              </button>
                              <div class="tp-search-form p-relative">
                                 <form action="#">
                                    <input type="text" placeholder="Search ...">
                                    <button type="submit" class="search-submit-icon"><i
                                          class="far fa-search"></i></button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tp-bar-icon">
                           <a href="javascript:void(0)" class="offcanvas-toggle-btn"><i class="fal fa-bars"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <!-- header area end -->


   <!-- offcanvas area -->
   <div class="offcanvas__area off-canvas-bg" data-background="assets/img/bg/Sidearea-bg-img.png">
      <div class="offcanvas_area-logo">
         <span class="offcanvas__close-btn"><a href="javascript:void(0)"><i class="fal fa-times"></i></a></span>
      </div>
      <div class="offcanvas-content">
         <!-- <div class="offcanvas-subtitle">
            <span>ELEVATE YOUR BUSINESS WITH</span>
         </div> -->
         <div class="offcanvas-logo pb-30 pt-30 logo">
            <img src="assets/img/logo/logo.png" alt="">
         </div>
         <div class="offcanva-details">
            <p>Our Firm was set up in 2014 with the point of giving specific consultancy and administrative
               administrations in the field of Civil Engineering.</p>
         </div>
         <div class="offcanva-btn">
            <a href="contact.html" class="tp-slider-btn   mt-40 d-inline-block" tabindex="-1">
               <span>
                  <svg width="53" height="8" viewBox="0 0 53 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M52.3536 4.35356C52.5488 4.15829 52.5488 3.84171 52.3536 3.64645L49.1716 0.464469C48.9763 0.269207 48.6597 0.269207 48.4645 0.464469C48.2692 0.659731 48.2692 0.976314 48.4645 1.17158L51.2929 4L48.4645 6.82843C48.2692 7.02369 48.2692 7.34027 48.4645 7.53554C48.6597 7.7308 48.9763 7.7308 49.1716 7.53554L52.3536 4.35356ZM-3.11023e-08 4.5L52 4.5L52 3.5L3.11023e-08 3.5L-3.11023e-08 4.5Z"
                        fill="currentColor"></path>
                  </svg>
                  <svg width="53" height="8" viewBox="0 0 53 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M52.3536 4.35356C52.5488 4.15829 52.5488 3.84171 52.3536 3.64645L49.1716 0.464469C48.9763 0.269207 48.6597 0.269207 48.4645 0.464469C48.2692 0.659731 48.2692 0.976314 48.4645 1.17158L51.2929 4L48.4645 6.82843C48.2692 7.02369 48.2692 7.34027 48.4645 7.53554C48.6597 7.7308 48.9763 7.7308 49.1716 7.53554L52.3536 4.35356ZM-3.11023e-08 4.5L52 4.5L52 3.5L3.11023e-08 3.5L-3.11023e-08 4.5Z"
                        fill="currentColor"></path>
                  </svg>
               </span>Get in touch
            </a>
         </div>
      </div>
      <div class="tp-mobile-menu"></div>
      <div class="tp-footer__widget pb-30 offcanvas-ct-info">
         <h3 class="tp-footer__widget-title">Info</h3>
         <ul>
            <li><a href="#">202, Second Floor, Building-30C, Street-2, Jami
                  Commercial, Phase-VII Ext., DHA, Karachi.</a></li>
            <li>
               <a href="tel:+92-345-3164013">+92-345-3164013</a>

            </li>
            <li><a href="mailto:alviconsulting.ace@gmail.com">alviconsulting.ace@gmail.com</a></li>
         </ul>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- header area end -->


   <section class="breadcrumb__area include-bg breadcrumb__overlay" data-background="assets/img/bg/contact.jpg">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content text-center p-relative z-index-1">
                  <h3 class="breadcrumb__title">contact</h3>
                  <div class="breadcrumb__list">
                     <span><a href="index.html">Home</a></span>
                     <span class="dvdr">:</span>
                     <span>contact</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->


   <main>
      <div class="contact-from-section pt-140">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="ct-info__box text-center pt-50 pb-50 mb-30">
                     <span class="mb-25 d-inline-block">
                        <svg width="42" height="62" viewBox="0 0 42 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M21.002 2.06609C31.4232 2.06609 39.9024 10.4099 39.9024 20.6667C39.9024 23.9286 39.0239 27.1421 37.3616 29.9679L21 57.8659L4.63647 29.966C2.97608 27.144 2.09764 23.9286 2.09764 20.6667C2.09764 10.4099 10.5768 2.06609 21 2.06609H21.002ZM21.002 27.898C25.0554 27.898 28.3506 24.6535 28.3506 20.6667C28.3506 16.6799 25.0535 13.4354 21.002 13.4354C16.9485 13.4354 13.6514 16.6799 13.6514 20.6667C13.6514 24.6535 16.9485 27.898 21.002 27.898ZM21.002 0C9.40293 0 0 9.25474 0 20.6667C0 24.4364 1.03011 27.958 2.82048 31.001C9.92003 43.1068 13.9005 49.8941 21 62L39.1795 31.001C40.9699 27.958 42 24.4364 42 20.6667C42 9.25474 32.5971 0 21 0H21.002ZM21.002 25.8319C18.1027 25.8319 15.751 23.5196 15.751 20.6667C15.751 17.8156 18.1027 15.5015 21.002 15.5015C23.9012 15.5015 26.251 17.8156 26.251 20.6667C26.251 23.5196 23.9012 25.8319 21.002 25.8319Z"
                              fill="currentColor" />
                        </svg>

                     </span>
                     <h3 class="ct-info__box-title">
                        Address line
                     </h3>
                     <p class="p-0">202, Second Floor, Building-30C, <br> Street-2, Jami
                        Commercial, Phase-VII Ext., DHA, Karachi.</p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ct-info__box text-center pt-50 pb-50 mb-30">
                     <span class="mb-25 d-inline-block">
                        <svg width="35" height="58" viewBox="0 0 35 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M32.0377 0H2.96231C1.3273 0 0 1.30348 0 2.90917V55.0908C0 56.6985 1.3273 58 2.96231 58H32.0377C33.6727 58 35 56.6985 35 55.0908V2.90917C35 1.30348 33.6727 0 32.0377 0ZM32.8131 55.0908C32.8131 55.5099 32.4664 55.8504 32.0397 55.8504H2.96436C2.53766 55.8504 2.19096 55.5099 2.19096 55.0908V45.1183H32.8152V55.0908H32.8131ZM32.8131 42.9686H2.18891V8.63483H32.8131V42.9686ZM32.8131 6.4872H2.18891V2.90917C2.18891 2.49012 2.53561 2.14763 2.96231 2.14763H32.0377C32.4644 2.14763 32.8111 2.49012 32.8111 2.90917V6.4872H32.8131Z"
                              fill="black" />
                           <path d="M14 49H21V51H14V49Z" fill="currentColor" />
                        </svg>


                     </span>
                     <h3 class="ct-info__box-title">
                        Phone Number
                     </h3>
                     <p class="p-0">
                        <a href="tel:+92-345-3164013">+92-345-3164013</a> <br>

                     </p>

                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ct-info__box text-center pt-50 pb-50 mb-30">
                     <span class="mb-25 d-inline-block">
                        <svg width="49" height="56" viewBox="0 0 49 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M48.818 23.0144L27.5018 1.26962C26.7004 0.451961 25.6342 0 24.5 0C23.3658 0 22.2996 0.450085 21.4982 1.26962L0 23.1982V56H49V23.2019L48.818 23.0162V23.0144ZM3.13971 22.8231L22.8842 2.68176C23.7482 1.80034 25.2537 1.80034 26.1176 2.68176L46.7904 23.7739L32.7022 38.1466L27.5018 32.8412C26.7004 32.0236 25.6342 31.5716 24.5 31.5716C23.3658 31.5716 22.2996 32.0236 21.4982 32.8412L16.2206 38.2235L2.13235 23.8508L3.13971 22.8231ZM14.8346 39.6356L14.6893 39.7857L14.6875 39.7838L1.9614 52.7669V26.5025L14.8364 39.6356H14.8346ZM3.5239 53.999L4.57721 52.9244H4.58088L22.8842 34.2534C23.7482 33.372 25.2537 33.372 26.1176 34.2534L45.4761 53.999H3.5239ZM47.0404 27.1927V52.7688L34.0882 39.5606L47.0404 26.3469V27.1927Z"
                              fill="black" />
                        </svg>
                     </span>
                     <h3 class="ct-info__box-title">
                        Mail Adress
                     </h3>
                     <p class="p-0">
                        <a href="mailto:alviconsulting.ace@gmail.com">alviconsulting.ace@gmail.com</a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="tp-ct-form white-bg pl-110 pr-110 pt-80 pb-130">
                     <form method="POST">
                        <input type="text" name="name" placeholder="Enter your name*" required>
                        <input type="email" name="email" placeholder="Your email here" required>
                        <input type="text" name="phone" placeholder="Enter your number*" required>
                        <input type="text" name="subject" placeholder="Subject*" required>
                        <textarea name="message" placeholder="Enter your Massage*"></textarea>
                        <div class="text-center">
                           <button type="submit" name="send"  class="tp-btn-border">Send Massage <span>
                                 <svg width="22" height="8" viewBox="0 0 22 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M21.3536 4.35356C21.5488 4.15829 21.5488 3.84171 21.3536 3.64645L18.1716 0.464468C17.9763 0.269205 17.6597 0.269205 17.4645 0.464468C17.2692 0.65973 17.2692 0.976312 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53554C17.6597 7.7308 17.9763 7.7308 18.1716 7.53554L21.3536 4.35356ZM-4.37114e-08 4.5L21 4.5L21 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
                                       fill="currentColor"></path>
                                 </svg>
                                 <svg width="22" height="8" viewBox="0 0 22 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M21.3536 4.35356C21.5488 4.15829 21.5488 3.84171 21.3536 3.64645L18.1716 0.464468C17.9763 0.269205 17.6597 0.269205 17.4645 0.464468C17.2692 0.65973 17.2692 0.976312 17.4645 1.17157L20.2929 4L17.4645 6.82843C17.2692 7.02369 17.2692 7.34027 17.4645 7.53554C17.6597 7.7308 17.9763 7.7308 18.1716 7.53554L21.3536 4.35356ZM-4.37114e-08 4.5L21 4.5L21 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
                                       fill="currentColor"></path>
                                 </svg>
                              </span></button>
                        </div>

                     </form>
                     <p class="ajax-response mt-20 text-center"></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-ct-map">
            <iframe src="https://maps.google.com/maps?q=alvi consulting&t=m&z=16&output=embed&iwloc=near"
               style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </main>






   <!-- footer area start -->
   <footer>
      <div class="tp-footer__area black-bg">
         <div class="tp-footer">

            <!-- footer top -->
            <div class="tp-footer__top pt-90 pb-60">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-12 text-center">
                        <h3 class="tp-footer__top-title">Have a project in mind?
                           Let’s work together.</h3>
                     </div>
                     <!-- <div class="col-lg-7">
                        <div class="tp-insta d-flex justify-content-lg-end">
                           <div class="tp-insta__item p-relative ml-20">
                              <img src="assets/img/footer/footer-sm-1.jpg" alt="">
                              <a href="#"><i class="fab fa-instagram"></i></a>
                           </div>
                           <div class="tp-insta__item p-relative ml-20">
                              <img src="assets/img/footer/footer-sm-2.jpg" alt="">
                              <a href="#"><i class="fab fa-instagram"></i></a>
                           </div>
                           <div class="tp-insta__item p-relative ml-20">
                              <img src="assets/img/footer/footer-sm-3.jpg" alt="">
                              <a href="#"><i class="fab fa-instagram"></i></a>
                           </div>
                           <div class="tp-insta__item p-relative ml-20">
                              <img src="assets/img/footer/footer-sm-4.jpg" alt="">
                              <a href="#"><i class="fab fa-instagram"></i></a>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
            <!-- footer top end  -->

            <!-- main-footer start  -->
            <div class="tp-footer__main">
               <div class="container">
                  <div class="tp-footer-border pt-60 pb-30">
                     <div class="row">
                        <div class="col-lg-4 col-md-6 p-20">
                           <div class="tp-footer__widget  pb-30">
                              <h3 class="tp-footer__widget-title">About Us</h3>
                              <ul>
                                 <li class="text-white text-justify">Our Firm was set up in 2014 with the point of
                                    giving specific consultancy and administrative administrations in the field of Civil
                                    Engineering. The organization started its excursion with a little gathering of
                                    individuals and is presently one of the legitimate establishments in the field,
                                    offering structured solutions to various architects and contractors. This
                                    association is controlled mainly by two Structural Engineers who collectively have
                                    around 25 years of diversified experience in the design and construction industry.
                                    An alliance of Engineer Fozia Naseem and Engineer Muhammad Rafeeque Ahmed Alvi holds
                                    the ground for ACE.</li>
                              </ul>
                           </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                             <div class="tp-footer__widget pb-30">
                                <h3 class="tp-footer__widget-title">Our Service</h3>
                                <ul>
                                   <li><a href="#">Tax strategy</a></li>
                                   <li><a href="#">Financial advices</a></li>
                                   <li><a href="#">Insurance strategy</a></li>
                                   <li><a href="#">Manage investment</a></li>
                                </ul>
                             </div>
                          </div> -->
                        <div class="col-lg-4 col-md-6 ">
                           <div class="tp-footer__widget  pb-30">
                              <h3 class="tp-footer__widget-title">Quick Links</h3>
                              <div class="row">
                                 <div class="col-6 ">
                                    <ul>
                                       <li><a href="index.html">Home</a></li>
                                       <li><a href="about.html">About Us</a></li>
                                       <li><a href="client.html">Out Client</a></li>
                                       <li><a href="associates.html">Out Associates</a></li>
                                    </ul>
                                 </div>
                                 <div class="col-6">
                                    <ul>
                                       <li><a href="project.html">Projects</a></li>
                                       <li><a href="gallery.html">Gallery</a></li>
                                       <li><a href="team.html">Our Team</a></li>
                                       <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="tp-footer__widget  pb-30">
                              <h3 class="tp-footer__widget-title">Info</h3>
                              <ul>
                                 <li><a href="#">202, Second Floor, Building-30C, Street-2, Jami
                                       Commercial, Phase-VII Ext., DHA, Karachi.</a></li>
                                 <li>
                                    <a href="tel:+92-345-3164013">+92-345-3164013</a>

                                 </li>
                                 <li><a href="mailto:alviconsulting.ace@gmail.com">alviconsulting.ace@gmail.com</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- main footer end  -->
         </div>
      </div>

      <!-- footer copy right -->
      <div class="top-footer-copyright pt-30 black-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-12">
                  <div class="tp-copyrigh-text mb-30">
                     <span>© 2022 ALVI CONSULTING ENGINEERS</span>
                  </div>
               </div>
               <div class="col-md-4 col-12">
                  <div class="tp-footer-social-icon mb-30 text-md-end">
                     <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer copyright end  -->
   </footer>
   <!-- footer area end -->


   <!-- JS here -->
   <script src="assets/js/mouse-effect.js"></script>
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/backtotop.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from weblearnbd.net/tphtml/arvilax/arvilax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 21:03:32 GMT -->

</html>