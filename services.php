<?php include "header.php"; ?>
 <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <!-- Breamcrumb Content -->
                 <div class="breadcrumb-content text-center">
                     <h2 class="text-white text-uppercase mb-3">What we offer</h2>
                     <ol class="breadcrumb d-flex justify-content-center">
                         <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>

                         <li class="breadcrumb-item text-white active">Our Services</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Breadcrumb Area End ***** -->

 <!-- ***** Service Area End ***** -->
 <!-- ***** Service Area End ***** -->
 <section id="service" class="section service-area ptb_150">
     <!-- Shape Top -->
     <div class="shape shape-top">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
             <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
         </svg>
     </div>
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-md-10 col-lg-7">
                 <!-- Section Heading -->
                 <div class="section-heading text-center">
                     <h2><?php print $service_title ?></h2>
                     <p class="d-none d-sm-block mt-4"><?php print $service_text ?></p>
                 </div>
             </div>
         </div>
         <div class="row">

             <?php
                $qs = "SELECT * FROM  service ORDER BY id DESC";


                $r1 = mysqli_query($con, $qs);

                while ($rod = mysqli_fetch_array($r1)) {
                    $id = "$rod[id]";
                    $serviceg = "$rod[service_title]";
                    $service_desc = "$rod[service_desc]";

                    print "
<div class='col-12 col-md-6 col-lg-4'>
<!-- Single Service -->
<div class='single-service p-4'  style='border: solid 1px #788282;'>
    <h3 class='my-3'>$serviceg</h3>
    <p>$service_desc</p>
    <a class='service-btn mt-3' href='servicedetail.php?id=$id'>Learn More</a>
</div>
</div>

";
                }
                ?>
         </div>
     </div>
     <!-- Shape Bottom -->
     <div class="shape shape-bottom">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
             <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
         </svg>
     </div>
 </section>
 <!-- ***** Service Area End ***** -->

 <!-- ***** Service Area End ***** -->


 <!-- ***** Review Area Start ***** -->
 <section id="review" class="section review-area bg-overlay ptb_100">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-md-10 col-lg-7">
                 <!-- Section Heading -->


                 <div class="section-heading text-center">
                     <h2 class="text-white"><?php print $test_title; ?></h2>
                     <p class="text-white d-none d-sm-block mt-4"><?php print $test_text; ?></p>
                 </div>
             </div>
         </div>
         <div class="row">
             <!-- Client Reviews -->
             <div class="client-reviews owl-carousel">
                 <!-- Single Review -->



                 <?php
                    $q = "SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


                    $r123 = mysqli_query($con, $q);

                    while ($ro = mysqli_fetch_array($r123)) {

                        $name = "$ro[name]";
                        $position = "$ro[position]";
                        $message = "$ro[message]";
                        $ufile = "$ro[ufile]";

                        print "

<div class='single-review p-5'>
<!-- Review Content -->
<div class='review-content'>
    <!-- Review Text -->
    <div class='review-text'>
        <p>$message</p>
    </div>
    <!-- Quotation Icon -->

</div>
<!-- Reviewer -->
<div class='reviewer media mt-3'>
    <!-- Reviewer Thumb -->
    <div class='reviewer-thumb'>
        <img class='avatar-lg radius-100' src='dashboard/uploads/testimony/$ufile' alt='img'>
    </div>
    <!-- Reviewer Media -->
    <div class='reviewer-meta media-body align-self-center ml-4'>
        <h5 class='reviewer-name color-primary mb-2'>$name</h5>
        <h6 class='text-secondary fw-6'>$position</h6>
    </div>
</div>
</div>


";
                    }
                    ?>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Review Area End ***** -->

 <!--====== Contact Area Start ======-->
 <section id="contact" class="contact-area ptb_100">
     <div class="container">
         <div class="row justify-content-between align-items-center">
             <div class="col-12 col-lg-5">
                 <!-- Section Heading -->
                 <div class="section-heading text-center mb-3">
                     <h2><?php print $contact_title ?></h2>
                     <p class="d-none d-sm-block mt-4"><?php print $contact_text ?></p>
                 </div>
                 <!-- Contact Us -->
                 <div class="contact-us">
                     <ul>
                         <!-- Contact Info -->
                         <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                             <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                             <a class="d-block my-2" href="tel:<?php print $phone1 ?>">
                                 <h3><?php print $phone1 ?></h3>
                             </a>

                         </li>
                         <!-- Contact Info -->
                         <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                             <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                             <a class="d-none d-sm-block my-2" href="mailto:<?php print $email1 ?>">
                                 <h3><?php print $email1 ?></h3>
                             </a>
                             <a class="d-block d-sm-none my-2" href="mailto:<?php print $email1 ?>">
                                 <h3><?php print $email1 ?></h3>
                             </a>

                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                 <!-- Contact Box -->
                 <div class="contact-box text-center">
                     <?php
                        // Database connection
                        $con = new mysqli("localhost", "root", "", "rasheed-foundation");
                        if ($con->connect_errno) {
                            echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
                        }

                        $errormsg = ""; // Initialize error message

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $name = mysqli_real_escape_string($con, $_POST['name']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $phone = mysqli_real_escape_string($con, $_POST['phone']);
                            $city = mysqli_real_escape_string($con, $_POST['city']);
                            $qualification = mysqli_real_escape_string($con, $_POST['qualification']);
                            $technology = mysqli_real_escape_string($con, $_POST['technology']);
                            $message = mysqli_real_escape_string($con, $_POST['message']);
                            
                        
                            // Perform form validation
                            if (strlen($name) < 5 || strlen($message) < 10 || strlen($phone) < 8 || empty($qualification) || empty($technology) || empty($city)) {
                                $errormsg = "Please fill in all required fields correctly.";
                            } else {
                                // Insert data into the database
                                $query = "INSERT INTO internship (name, email, phone, city, qualification, technology, message) VALUES ('$name', '$email', '$phone', '$city', '$qualification', '$technology', '$message')";
                        
                                if ($con->query($query) === TRUE) {
                                    $successMsg = "Enquiry Sent Successfully. We shall get back to you ASAP.";
                                } else {
                                    $errormsg = "Error: " . $query . "<br>" . $con->error;
                                }
                            }
                        }
                        
                        
                        ?>

                     <form action="" method="post" enctype="multipart/form-data">
                         <div class="row">
                             <div class="col-12">
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                 </div>

                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                 </div>
                             </div>

                             <div class="col-12">
                                <div class="form-group">
                                    <select class="form-control" name="city" required="required">
                                        <option value="" disabled selected>Select City</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Delhi">Delhi</option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-12">
                                <div class="form-group">
                                    <select class="form-control" name="qualification" required="required">
                                        <option value="" disabled selected>Please Select Qualification</option>
                                        <option value="BE/B.Tech">BE/B.Tech</option>
                                        <option value="MBA">MBA</option>
                                        <option value="BSC">BSC</option>
                                        <option value="MSC">MSC</option>
                                        <option value="MCA">MCA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <select class="form-control" name="technology" required="required">
                                        <option value="" disabled selected>Please Select Technology</option>
                                        <option value="Software Developer">Software Developer</option>
                                        <option value="Front-End Developer">Front-End Developer</option>
                                        <option value="Back-End Developer">Back-End Developer</option>
                                        <option value="Full-Stack Developer">Full-Stack Developer</option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-12">
                                 <div class="form-group">
                                     <textarea class="form-control" name="message" placeholder="Please describe yourself" required="required"></textarea>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                             </div>
                             
                         </div>
                     </form>
                     <p class="form-message">
                         <?php
                            if (!empty($errormsg)) {
                                echo "<div class='alert alert-danger alert-dismissible alert-outline fade show'>$errormsg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                            }
                            if (!empty($successMsg)) {
                                echo "<div class='alert alert-success alert-dismissible alert-outline fade show'>$successMsg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                            }
                            ?>
                     </p>
                 </div>


             </div>
         </div>
     </div>
 </section>
 <!--====== Contact Area End ======-->

 <!--====== Call To Action Area Start ======-->
 <section class="section cta-area bg-overlay ptb_100">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-lg-10">
                 <!-- Section Heading -->
                 <div class="section-heading text-center m-0">
                     <h2 class="text-white"><?php print $enquiry_title; ?></h2>
                     <p class="text-white d-none d-sm-block mt-4"><?php print $enquiry_text; ?></p>
                     <a href="contact" class="btn btn-bordered-white mt-4">Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--====== Call To Action Area End ======-->

 <?php include "footer.php"; ?>