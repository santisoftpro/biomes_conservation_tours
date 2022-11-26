<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our destination</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">
        <?php $sql = "SELECT * from tbldestination";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {	?>

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image"> 
                <a href="agencies.php?pkgid=<?php echo htmlentities($result->id);?>"><img src="images/<?php echo htmlentities($result->image);?>" alt=""></a>
            </div>
            <div class="content">
                <h3><?php echo htmlentities($result->desti_name);?></h3>
                <p>Read More about The Destination Services and Booking...</p>
                <a href="agencies.php?pkgid=<?php echo htmlentities($result->id);?>">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <?php }} ?>    
       

    </div>

</section>

<!-- destination section ends -->