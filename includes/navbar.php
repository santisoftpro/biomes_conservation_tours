<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <img src="images/logo.png" alt=""> BIOMES CONSERVATION</a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destinations</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#packages">packages</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>

    </nav>
       <!-- model pop up enguiry form -->
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="myBtn">Enquire</button>
        <!-- model pop up enguiry form -->


     
   

</header>

<!-- header section ends -->

<!-- The Modal -->
    <div id="myModal" class="modal">

     <!-- php code for inserting enquiry process -->
     <?php
        include('includes/config.php');
        if(isset($_POST['submit1']))
        {
        $fname=$_POST['fname'];
        $email=$_POST['email'];	
        $mobile=$_POST['mobile'];
        $subject=$_POST['subject'];	
        $budget=$_POST['budget'];	
        $hearabout=$_POST['hearbout'];	
        $destination=$_POST['destination'];	
        $description=$_POST['description'];
        $sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,budget,hearbout,destination,Description) VALUES(:fname,:email,:mobile,:subject,:budget,:hearbout,:destination,:description)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
        $query->bindParam(':subject',$subject,PDO::PARAM_STR);
        $query->bindParam(':budget',$subject,PDO::PARAM_STR);
        $query->bindParam(':hearbout',$subject,PDO::PARAM_STR);
        $query->bindParam(':destination',$subject,PDO::PARAM_STR);
        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
        $msg="Enquiry  Successfully submited";
        }
        else 
        {
        $error="Something went wrong. Please try again";
        }

        }

        ?>
     <!-- Modal content -->
     
     <div class="modal-content">
       <span class="close">&times;</span>
        <div class="contr">
        <h1>GET IN TOUCH</h1>
        <p>Have any questions or suggestions? Drop us a message</p>
        <form action="index.php" name="enquiry" method="post">
             <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
            <div class="row">
                <div class="column">
                    <label for="name">Names</label>
                    <input type="text" id="fname" placeholder="Your name here" name="fname">
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your email here" name="email">
                </div>
            </div>
            <div class="row">
                 <div class="column">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" placeholder="Your phone number here" name="mobile">
                </div>
                <div class="column">
                    <label for="subject">Preferred method of contact</label>
                   <select name="subject" id="">
                    <option>Select...</option>
                    <option>Phone</option>
                    <option>Email</option>
                    <option>Video Call</option>
                   </select>
                </div>
            </div>
            <div class="row">
                 <div class="column">
                    <label for="Budget">Budget per person</label>
                    <select name="budget" id="">
                    <option>Select...</option>
                    <option>500$-$700</option>
                    <option>700$-1000$</option>
                    <option>1000$+</option>
                   </select>
                </div>
                <div class="column">
                    <label for="hearabout">How did you hear about us?</label>
                   <select name="hearbout" id="">
                    <option>Select...</option>
                    <option>Word of Mouth</option>
                    <option>Social Media</option>
                    <option>Google Search</option>
                    <option>Other</option>
                   </select>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="Destination">Destination</label>
                   
                    <select name="destination" id="">
                         <option value="">Select...</option>
                         <?php 
                        $con = mysqli_connect("localhost","root","","ultimate");
                     $query = mysqli_query($con,"select * from tbldestination order by desti_name asc");
                     while($rw=mysqli_fetch_array($query))
                     {
                     ?>
                    
                     <option value=""><?php echo $rw['desti_name']; ?></option>
                     <?php
                     }
                    ?>
                   
                   </select>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Message</label>
                    <textarea id="description" placeholder="Describe your issue in detail here" rows="3" name="description"></textarea>
                </div>
            </div>
            <button type="submit" name="submit1">Submit</button>
        </form>
    </div>
      
     </div>

    </div>

    <script type="text/javascript">


    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    </script>
