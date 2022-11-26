<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;1,800&family=Roboto+Mono:ital,wght@0,200;0,500;0,700;1,100;1,400;1,500&display=swap" rel="stylesheet">
    <title>Form</title>
</head>
<body>

<?php 
     $con = mysqli_connect("localhost","root","","ultimate");

?>
    <div class="container">
       d love to respond to yout queti and help ypu  free to get in touch with us . </p>

            <div class="contact-box">
             <h1>Connect With us</h1>
        <p>We woul
                 <div class="contact-right">
                    <h3>Sent Your request</h3>
                       <form action="form.php" name="enquiry" method="post">
             
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
                    <option value="">Word of Mouth</option>
                    <option value="">Social Media</option>
                    <option value="">Google Search</option>
                    <option value="">Other</option>
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
    
</body>
</html>