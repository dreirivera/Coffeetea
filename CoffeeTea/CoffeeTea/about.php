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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p>ABOUT / <a href="contact.php">CONTACT</a></p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="pics/eme.jpg" alt="">
        </div>

        <div class="content">
            <h3>WHO WE ARE</h3>
            <p>Sunt fugiat consequat velit incididunt incididunt qui nostrud. Pariatur dolor qui laboris ad adipisicing esse voluptate nulla et. Nulla proident nostrud qui ipsum sint consequat do do irure occaecat sit laboris. Amet et commodo enim velit laboris est laborum. Pariatur officia aute esse deserunt incididunt fugiat in nostrud id eiusmod. Voluptate commodo aliqua laborum elit amet do reprehenderit aliquip esse dolor. Labore et aliqua eiusmod nulla magna nostrud ipsum eu fugiat enim esse duis in excepteur. Reprehenderit anim incididunt non ad incididunt anim exercitation enim mollit elit eiusmod.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>WHAT WE PROVIDE</h3>
            <p>Mollit reprehenderit exercitation ea enim excepteur. Aute laborum non elit nisi minim culpa minim occaecat. Eu nulla duis officia ea occaecat consequat sunt ex esse fugiat elit id eu do. Qui eu commodo anim nisi culpa eu adipisicing occaecat excepteur cupidatat deserunt amet. Nulla ea amet deserunt consectetur. Id aute pariatur mollit officia. Adipisicing qui nostrud consectetur cillum aute sunt non. Lorem ea deserunt in voluptate nulla consequat nostrud culpa ullamco irure deserunt quis laborum. Pariatur anim labore laborum dolor exercitation veniam mollit pariatur ex.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="pics/coffee ast.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="pics/cafe.jpg" alt="">
        </div>

        <div class="content">
            <h3>WHY CHOOSE US</h3>
            <p>Duis quis non esse in id id laboris cupidatat esse ipsum mollit reprehenderit. Reprehenderit commodo cupidatat aliquip non aliquip incididunt in cillum esse aute mollit. Aliqua non consectetur reprehenderit voluptate est id ipsum culpa commodo sunt sunt ea enim. Duis cupidatat id deserunt do nostrud. In ea fugiat amet qui. Anim aliquip consequat dolor proident cupidatat ut pariatur proident. Nostrud ut aliquip ut occaecat minim eu. Laborum ipsum pariatur magna aute qui laboris officia cupidatat excepteur tempor nulla cillum. Cillum non non dolore minim enim fugiat adipisicing occaecat ad. Qui id reprehenderit excepteur aute elit ad enim pariatur aute sint. In id non occaecat deserunt eiusmod officia labore voluptate commodo. Adipisicing non Lorem incididunt tempor nostrud consequat laboris.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">OUR SHOP'S REVIEW</h1>

    <div class="box-container">

        <div class="box">
            <img src="pics/review1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Basta Name</h3>
        </div>

        <div class="box">
            <img src="pics/review2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

            </div>
            <h3>Basta Name</h3>
        </div>

        <div class="box">
            <img src="pics/review3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Basta Name</h3>
        </div>

        <div class="box">
            <img src="pics/review4.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Basta Name</h3>
        </div>

        <div class="box">
            <img src="pics/review5.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Basta Name</h3>
        </div>

        <div class="box">
            <img src="pics/review6.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Basta Name</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>