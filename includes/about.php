<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive travel website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

<!-- header section starts  -->
<body>
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>Ultimate Rwanda </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#packages">packages</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>

    </nav>
       <!-- model pop up enguiry form -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Enquire</button>
        <!-- model pop up enguiry form -->


     
   

</header>

<!-- header section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>We are Rwanda based tour Operator Company. We offer tours and game drives, with knowledgeable local Rwandan tour guides with extensive background and experience in Conservation Biology as well as deep understanding of Rwanda’s ecosystems.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>
</body>
</html>