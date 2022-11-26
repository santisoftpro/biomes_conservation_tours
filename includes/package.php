<?php
session_start();
error_reporting(0);
include('config.php');
?>


<!-- packages section starts  -->

 <section class="packages" id="packages">

   <h1 class="heading-title">top destinations</h1>


<?php $sql = "SELECT * from tbltourpackages where PackageId = 1";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt="">
         </div>
         <div class="content">
            <h3><?php echo htmlentities($result->PackageName);?></h3>
            <p> <b>Package Type:</b> 
             <h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
         
         </p>
            <a href="agencies.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="btn">book now</a>
         </div>
      </div>
<?php }} ?>
      

    



   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->