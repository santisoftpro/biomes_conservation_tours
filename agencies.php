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
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbldestination where id=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>


<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">Go to</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Our Destination</h3>
        <h3 data-aos="fade-up" data-aos-delay="300"><?php echo htmlentities($result->desti_name);?></h3>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quia illum quod perspiciatis harum in possimus? Totam consequuntur officia quia?</p>
        <a data-aos="fade-up" data-aos-delay="600" href="akagera.php" class="btn">book now</a>
    </div>

</section>

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/<?php echo htmlentities($result->videos);?>" muted autoplay loop class="video"></video>
        
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>Our Destination ?</span>
        <h3><?php echo htmlentities($result->desti_name);?></h3>
        <p><?php echo htmlentities($result->description);?></p>
        <a href="<?php echo htmlentities($result->links);?>" class="btn">See more...</a>
    </div>

</section>



<style>
.package-content-div{
    position: flex;
    background-color: #111;
    left: 30px;

    width: 100%;
    height: 250px;

}
.package-content-div h2{
font-size: 30px;
position: absolute;
left: 30px;
color: #fff;
}
.card{
    position: absolute;
    background-color: #222;
    
    display: flex;
   align-items: center;
    margin-top: 50px;
    margin-left: 25%;
    width: 50%;
    height: 200px;
    margin-bottom: 20px;
    margin-right: 20px;
    border-radius: 10px;
    color: #fff;
 
   
}

.card a img{
height: 200px;
background-size: cover;
padding: 20px;

}
.card section{
    display: block;
    left: 250px;
    position: absolute;
   
}

.card section h4 {
    font-size: 2rem;
}.card section h5{
    font-size: 2rem;
}
</style>


<!-- Packages -->
<section class="packages" id="packages">

   <h1 class="heading-title">Related Package</h1>

   <div class="box-container">
    <!-- php package code -->

<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=2";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

      <div class="box">
         <div class="image">
            <img src="images/<?php echo htmlentities($result->PackageImage);?>" alt="">
         </div>
         <div class="content">
            <h3><?php echo htmlentities($result->PackageName);?></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="package_datails.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="btn">book now</a>
         </div>
      </div>

  <?php }} ?>    

      

   </div>

</section>












<?php }} ?>

<!-- banner section ends -->

<!-- footer section starts  -->
<?php include("includes/footer.php"); ?>

<!-- footer section ends -->

<?php include("includes/script.php"); ?>



</body>
</html>
