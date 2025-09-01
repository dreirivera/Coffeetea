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
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Need Coffee and Tea for Everyone?</h3>
      <p>Reprehenderit non qui consectetur Lorem ex ut. Et et irure ipsum aliqua. Fugiat ullamco proident cupidatat Lorem non. Aliquip aliquip quis officia nulla ullamco aute sint eiusmod mollit sint eiusmod amet. Magna eiusmod quis fugiat consectetur.</p>
   </div>

</section>


<section class="home-contact">

   <div class="content">
      <h3>COFFEE-TEA PRESENTS</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
      <p>Interested? See more.<p>
      <a href="about.php" class="btn">LEARN MORE!</a>
   </div>

</section>


<section class="ext">
        <div class="photo">
            <img src="pics/togo.png">
        </div>
        <div class="other">
            <h2>WHAT'S IN COFFEE TEA?</h2>
            <p>Amet ullamco in sint voluptate incididunt fugiat. Pariatur ut culpa ad deserunt enim esse qui sunt officia aute pariatur laboris anim. Aute nulla occaecat commodo labore tempor ea fugiat ut. Velit nisi et reprehenderit ad ipsum. Magna voluptate
                Lorem laboris excepteur amet irure. Ea nisi reprehenderit ea dolore cillum aute enim nostrud do laboris proident ipsum. Aute elit culpa sunt nulla dolor et do incididunt.
            </p>
            <p>In nulla culpa minim elit cupidatat eu cillum. Elit anim culpa et eu minim deserunt nulla laboris. Qui est nostrud voluptate incididunt aliqua enim amet veniam est est fugiat eu. Et exercitation officia amet veniam enim ut excepteur et. Adipisicing
                esse nulla officia eiusmod nisi mollit ullamco quis dolore ea.S
            </p>
        </div>

    </section>

<section class="products">



</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>