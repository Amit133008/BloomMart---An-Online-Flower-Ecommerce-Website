<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <?php @include 'header.php'; ?>

   <section class="heading">
      <h3>About Us</h3>
      <p> <a href="home.php">Home</a> / About </p>
   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about-img-1.png" alt="">
         </div>

         <div class="content">
            <h3>Why Choose Us ?</h3>
            <p>We offer top-quality flowers with unique designs, excellent service, and a promise to make every occasion truly unforgettable.</p>
            <a href="shop.php" class="btn">Shop Now</a>
         </div>

      </div>

      <div class="flex">

         <div class="content">
            <h3>What We Provide ?</h3>
            <p>We provide an exquisite collection of fresh flowers and artistically designed bouquets that bring beauty, joy, and elegance to every occasion.</p>
            <a href="contact.php" class="btn">Contact Us</a>
         </div>

         <div class="image">
            <img src="images/about-img-2.jpg" alt="">
         </div>

      </div>

      <div class="flex">

         <div class="image">
            <img src="images/about-img-3.jpg" alt="">
         </div>

         <div class="content">
            <h3>Who We Are ?</h3>
            <p>We are a passionate team dedicated to spreading happiness through fresh flowers and thoughtfully crafted floral arrangements.</p>
            <a href="#reviews" class="btn">Clients Reviews</a>
         </div>

      </div>

   </section>

   <section class="reviews" id="reviews">

      <h1 class="title">Client's Reviews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Absolutely delighted with the service! The flowers were fresh, beautifully arranged, and brought so much joy to the occasion.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Krishna Pandey</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Very happy with the flowers and service! Everything looked beautiful, though delivery was slightly delayed, but the quality made up for it.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shreya Patil</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>The flowers were fresh and beautifully arranged, and overall service was great, though there was a minor delay in processing.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sahil Pawar</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lovely flowers and great quality! Service was good, with just a small delay, but the bouquet made the occasion special.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Divya Mishra</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Beautifully arranged flowers with excellent quality! Service was mostly smooth, though there was a slight delay in delivery.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rutik Lagad</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Fresh and gorgeous flowers that brightened the occasion! Service was good overall, with only a minor delay.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Divya Rathod</h3>
         </div>

      </div>

   </section>






   <?php @include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>
</html>
