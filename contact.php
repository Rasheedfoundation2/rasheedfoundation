<?php include "header.php";?>

        <!-- ** Breadcrumb Area Start ** -->
        <div class="contact-image">
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
        <!-- <section class="section breadcrumb-area overlay-dark d-flex align-items-center" style="background-image: url('../img/bg/contactusbg.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">    -->
        <!-- <section class="section breadcrumb-area overlay-dark d-flex align-items-center" style="background-image: url('../img/bg/contactusbg.jpg');"> -->
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3">Contact Us</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
        
       
        

        <!-- ** Breadcrumb Area End ** -->


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
                                    <!-- <span><i class="fas fa-mobile-alt fa-3x"></i></span> -->
                                    <span><i class="fab fa-whatsapp fa-3x"></i></span>

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
                            $message = mysqli_real_escape_string($con, $_POST['message']);

                            // Perform form validation
                            if (strlen($name) < 5 || strlen($message) < 10 || strlen($phone) < 8) {
                                $errormsg = "Please fill in all required fields correctly.";
                            } else {
                                // Insert data into the database
                                $query = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

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
                                     <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
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


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   ?>
<!-- 
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
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--====== Contact Area End ======-->


        <!--====== Map Area Start ======-->
        <section class="section map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15081.149296253196!2d73.0121302!3d19.0950471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1ec5f020ca5%3A0xd439bfda31e4859e!2sRASHEED%20FOUNDATION!5e0!3m2!1sen!2sin!4v1699336458424!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </section>
        <!--====== Map Area End ======-->
        <?php include "footer.php";?>