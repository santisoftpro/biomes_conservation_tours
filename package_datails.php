<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!-- header section included -->
<!-- header section starts  -->
<?php include("includes/header.php"); ?>
<!-- header section ends -->
<!-- end of header section included -->
<body>

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo.png" alt=""> BIOMES CONSERVATION</a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="index.php">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="index.php">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="index.php">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="index.php">gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php">packages</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="index.php">blogs</a>

    </nav>

  
   
</header>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">follow us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">to the BIOMES</h3>
          <h3 data-aos="fade-up" data-aos-delay="300">CONSERVATION TOURS</h3>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quia illum quod perspiciatis harum in possimus? Totam consequuntur officia quia?</p>
        
    </div>

</section>
<!-- Php code for Insertig Package in the database Help Me God Please -->
 <?php
          $con = mysqli_connect("localhost","root","","ultimate");
          if(isset($_POST['submit2']))
          {
          $id =3;
          $dest=$_POST['destination'];
          $from = $_POST['fromdate'];
          $to = $_POST['todate'];
          $no = $_POST['no'];
          $name = $_POST['tourName'];
          $email = $_POST['useremail'];
          $country = $_POST['country'];
          $phone = $_POST['phoneNumber'];
          $spend = $_POST['tourspend'];
          $msg = $_POST['comment'];
          $status = 0;
          $query = mysqli_query($con,"INSERT INTO `tblbooking`(`PackageId`, `destination`, `FromDate`, `ToDate`, `tourNo`, `tourName`, `UserEmail`, `country`, `phoneNumber`, `tourspend`, `Comment`,`status`) VALUES ('$id','$dest','$from','$to','$no','$name','$email',' $country','$phone','$spend','$msg','$status')");
          if($query)
          {
            echo "sucess";

        }
        else{
            echo "sorry again";
        }

          }
        ?>
<!-- booking form section starts  -->

<section class="book-form" id="book-form">

    <form action="" method="POST">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>where to?</span>
            <input type="text" placeholder="place name" value="" name="destination">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>From</span>
            <input type="date" value="" name="fromdate">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>To</span>
            <input type="date" value="" name="todate">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>how many?</span>
            <input type="number" placeholder="number of travelers" value="" name="no">
        </div>
        




<!-- booking form section ends -->
 <div class="container">
        <h1>Personal Information</h1>
            <div class="row">
                <div  data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Your name here" name="tourName">
                </div>
                <div data-aos="zoom-in" data-aos-delay="200" class="inputBox">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email here" name="useremail">
                </div>
            </div>
            <div class="row">
                <div data-aos="zoom-in" data-aos-delay="250" class="inputBox">
                    <label for="subject">Country Residence</label>
                    <input type="text" id="subject" placeholder="Your Country Residence here" name="country">
                </div>
                <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" placeholder="Your phone number here" name="phoneNumber">
                </div>
            </div>
             <div class="row">
                <div data-aos="zoom-in" data-aos-delay="350" class="inputBox">
                    <label for="prefer">How much are you looking to spend on this trip? (USD Per Person)</label>
                     <input type="tel" id="contact" placeholder="How Much are you looking for to spend on the trip?" name="tourspend">
                </div>
            </div>
            <div class="row">
                <div data-aos="zoom-in" data-aos-delay="350" class="inputBox">
                    <label for="comment">Your Comment</label>
                    <textarea id="comment" placeholder="Describe your issue in detail here" rows="3" name="comment"></textarea>
                </div>
            </div>
            <input data-aos="zoom-in" data-aos-delay="400" type="submit" value="BOOK" class="btn" name="submit2">
           
        </form>
        </section>
    </div>



<!-- footer section starts  -->
<?php include("includes/footer.php"); ?>

<!-- footer section ends -->

<?php include("includes/script.php"); ?>



</body>
</html>
