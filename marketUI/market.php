<?php
 session_start();
if(!isset($_SESSION['Login'])) // If session is not set then redirect to Login Page
{
    header("Location:login.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/R.jpg" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest image</h3>
            <button  onclick = "toggleText(this)"class="btn">Buy Now</button>
            <!-- <a href="watch.php" class="btn">Buy Now</a> -->
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/R1.jpg" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest image</h3>
            <button onclick = "toggleText(this)" class="btn">Buy Now</button>
            <!-- <a href="shop.php" class="btn">Buy Now</a> -->
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/R2.jpg" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest video</h3>
            <button onclick = "toggleText(this)" class="btn">Buy Now</button>
            <!-- <a href="shop.php" class="btn">Buy Now</a> -->
         </div>
      </div>   

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/R3.jpg" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest video</h3>
            <button onclick = "toggleText(this)" class="btn">Buy Now</button>
            <!-- <a href="shop.php" class="btn">Buy Now</a> -->
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Video</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>Images</h3>
   </a>
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>











<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
   },
});


</script>

</body>
</html>