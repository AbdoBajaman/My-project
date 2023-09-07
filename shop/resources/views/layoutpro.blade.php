
<html>



</html>
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Products</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <!-- owl stylesheets --> 
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   
</head>
    
    
    <!-- header section start -->
       <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="category">category</a>
                  <a href="product">Products</a>
                  <a href="about">About</a>
                  <a href="client">Client</a>
                  <a href="contact">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <a class="logo"  href="product"><img  style="height: 70px ; margin-left:50%;" src="images/download.png"></a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>

                        <li>  <a href="{{ route('logout') }}"> logout</a>   </li>
                        <li><a href="#"><img src="images/user-icon.png"></a></li>
                        <li><a href="#"><img src="images/bag-icon.png"></a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div> 
      

@yield('c')









          <!-- footer section start -->
          <div class="footer_section layout_padding">
            <div class="container">
               <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
               <div class="contact_section_2">
                  <div class="row">
                     <div class="col-sm-4">
                        <h3 class="address_text">Contact Us</h3>
                        <div class="address_bt">
                           <ul>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address:Do3n</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call:+967773087640</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email:abdo99669@gmail.com</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="footer_logo_1"><a href="index.html"><img src="images/download.png"></a></div>
                        
                     </div>
                    
                  </div>
               </div>
               {{-- <div class="social_icon">
                  <ul>
                     <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div> --}}

           <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
         <!-- footer section end -->

      <!-- header section end 