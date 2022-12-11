<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images_site/wedding/maliknaex.jpeg) no-repeat">
            <div class="content">
               <h3>planifier vos évènements</h3>
               <p>Des jeunes qui planifient vos évènements:marriage,anniversaire,fête de révélation,douche de bébé...</p>
               <a href="about.php" class="btn">Découvrir ici</a>
            </div>
         </div>

        
        

         <div class="swiper-slide slide" style="background:url(images_site/birthday/boys/boy1.jpg) no-repeat">
            <div class="content">
               <h3>planifier vos évènements!</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
               <a href="about.php" class="btn">Découvrir ici</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">Nos services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/wedding/wed1.jpg" alt="">
            <div class="content">
               <h3>Mariage</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="mariage.php" class="btn">voir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/SlG7pNAv.jpg" alt="">
            <div class="content">
               <h3>Les anniversaires</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="homeanniv.php" class="btn">Voir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/Décoration Baby Shower.jpg" alt="">
            <div class="content">
               <h3>douche de bébé</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="baby-shower.php" class="btn">Voir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/birthday/TqpV9fep.jpg" alt="">
            <div class="content">
               <h3>fête de révélation </h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/Graduation Tassel Cake.jpg" alt="">
            <div class="content">
               <h3>remise de diplôme</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/wedding/Moroccan Takshita.jpg" alt="">
            <div class="content">
               <h3>FIANÇAILLE</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>