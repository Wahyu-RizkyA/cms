@extends('layouts.masterLayout')
@section('content')
       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="images/basketball.png" alt="img"/></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4>basket ball</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/t-shirt.png" alt="img"/ ></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4> T-Shirt</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/game.png" alt="img"/></figure>
                     <h3> $<strong class="price_text">50</strong></h3>
                     <h4>Game</h4>
                  </div>
               </div>
    
       
         
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="images/basketball.png" alt="img"/"></figure>
                   <h3> $<strong class="price_text">50</strong></h3>
                     <h4>basket ball</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/t-shirt.png" alt="img"/"></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4>T-Shirt</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/game.png" alt="img"/"></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4>Game</h4>
                  </div>
               </div>
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
     

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
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


</body>
</html>
@endsection