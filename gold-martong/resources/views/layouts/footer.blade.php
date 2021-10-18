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

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
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