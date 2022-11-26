<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title></title>
  </head>
  <body>
    <div class="container">
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
        <h1>GET IN TOUCH</h1>
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

  </body>
</html>