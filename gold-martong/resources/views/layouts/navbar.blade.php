<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Home</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="{{asset('ccss/font-awesome.min.css')}}" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="{{asset('css/animate.css')}}" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="{{asset('style.css')}}" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="{{asset('css/colors.css')}}" rel="stylesheet">
   <!-- light box gallery -->
   <link href="{{asset('css/ekko-lightbox.css')}}" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   </head>
   <body id="home_page" class="home_page">
      <!-- loader -->
      <div id="preloader">
         <img class="preloader" src="images/logo.png" alt="#">
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="home"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                      <div class="top_section_info">
                         <ul>
                           <li>Contact Us: <img src="images/i1.png" alt="#" /> <a href="#">( +71 7569834142 )</a></li>
                           <li><img src="images/i2.png" alt="#" /> <a href="#">honey@gmail.com</a></li>
                           <li><img src="images/i3.png" alt="#" /> <a href="#">104 New york , USA</a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

        <div class="header_bottom_section">

         <div class="container">
            
           <div class="row">
               <div class="col-md-12">
                  <div class="full ">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                              <li class="nav-item active">
                                    <a class="nav-link" href="home">ระบบจัดการข้อมูลร้าน</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about">นำเข้าข้อมูลลูกค้า</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="jewellery">จัดการคลังทอง</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="shop">จัดการการซื้อขายทอง</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact">จัดการการจำนำทอง</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact">รายงานผลการดำเนินงาน</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <!-- <div class="search_bar">
                        <form action="index.html">
                           <input type="text" class="search_field" placeholder="Search" required />
                           <button class="search_button" type="button"><i class="fa fa-search"></i></button>
                        </form>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      @yield('content')
     
      <!-- footer -->
      <footer class="footer layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/logo_footer.png" alt="#" /></a>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Address</h3>
                  </div>
                  <div class="address_infor">
                     <p> 
                        <span class="icon"><img src="images/location_icon.png" alt="#" /></span>
                        <span class="addrs">104 New York , USA</span>
                     </p>
                  </div>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Social Link</h3>
                  </div>
                  <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="images/fb.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/tw.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/gp.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/in.png" alt="#" /></a></li>
                    </ul>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Newsletter</h3>
                  </div>
                  <div class="email_address_bottom">
                     <form>
                        <fieldset>
                           <div class="field_email">
                              <input type="email" name="email" placeholder="Enter Your Email">
                              <button><i class="fa fa-search"></i></button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/tether.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/parallax.js')}}"></script>
      <script src="{{asset('js/animate.js')}}"></script>
      <script src="{{asset('js/ekko-lightbox.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>
