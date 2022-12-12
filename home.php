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
   <style>
      @media(min-aspect-ratio:16/9){
        .back-video{
         width: 100%;
         height:auto;
        }
      }
      .back-video{
         position:absolute;
         right:0; bottom:0;
         z-index:0; 
      }
     .video{
        background: var(--transparent-white);
        border-radius: .5rem;
        backdrop-filter: blur(.1rem);
        box-shadow: var(--box-shadow);
        text-align: center;
        padding:2rem;
        width:35rem;
}
     
   </style>
</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

               <div class="swiper-slide slide">
               <video autoplay loop muted plays-inline  class="back-video">
                  <source src="images_site/video/videomarriage.mp4">
               </video>
               <div class="video">
               <h1>PLANIFIER VOS EVENEMENTS</h1>
               <a href="about.php" class="btn">Découvrir ICI</a> 
               
            </div>
         </div>

        
        

         <div class="swiper-slide slide" style="background:url(images_site/birthday/boys/boy1.jpg) no-repeat">
            <div class="content">
               <h3>planifier vos évènements!</h3>
               <p>Des Jeunes Qui Planifient Vos Evènements:Marriage, Anniversaire,Fête De Révélation,Douche De Bébé...</p>
               <a href="about.php" class="btn">Découvrir ICI</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">Nos Designs</h1>

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
               <a href="gender.php" class="btn">Voir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/Graduation Tassel Cake.jpg" alt="">
            <div class="content">
               <h3>remise de diplôme</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">Voir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/wedding/Moroccan Takshita.jpg" alt="">
            <div class="content">
               <h3>FIANÇAILLE</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="fiancelle.php" class="btn">Voir plus</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="services">

   <h1 class="heading">Nos Services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images_site/services/photography.png" alt="">
            <div class="content">
               <h3>photographie</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/services/invitation.jfif" alt="">
            <div class="content">
               <h3>Invitations</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">à propos de nous</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/services/decoration.jfif" alt="">
            <div class="content">
               <h3>Décoration</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">à propos de nous</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/services/makeup.jfif" alt="">
            <div class="content">
               <h3>Makeup</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">à propos de nous</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-5.jpg" alt="">
            <div class="content">
               <h3>Animation & Music</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">à propos de nous</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images_site/services/meals.jpg" alt="">
            <div class="content">
               <h3>Meals & Drinks</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">à propos de nous</a>
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