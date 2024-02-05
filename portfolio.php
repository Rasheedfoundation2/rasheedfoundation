<?php include "header.php";?>
<div class="portfolio-image">
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3">Small Step Big Impact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
        <!-- ***** Breadcrumb Area End ***** -->
        <!-- <h1 sttle="">Our Impact</h1> -->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center" style="margin-top:20px;">
                    <h2>Our Impact</h2>
                    <p class="d-none d-sm-block mt-4">Rasheed Foundation has been working in India for years. We do this through well-planned 
                        and comprehensive programmes in health, education, livelihoods, Disaster Relief and Women Emporment and response. 
                        We are part of the Rasheed Foundation Confederation, working in over indian countries 
                        for a world where all people live with dignity and security.</p>
                </div>
            </div>
        </div>
     <!-- ***** Portfolio Area Start ***** -->
     <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">

 <!-- Portfolio Items -->
                <div class="row items portfolio-items">

                <?php
				   $q="SELECT * FROM  portfolio ORDER BY id DESC";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$id="$ro[id]";
	$port_title="$ro[port_title]";
    $port_desc="$ro[port_desc]";
    $ufile="$ro[ufile]";

print "
<div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
<!-- Single Case Studies -->
<div class='single-case-studies'>
    <!-- Case Studies Thumb -->
    <a href='portdetail.php?id=$id'>
        <img src='dashboard/uploads/portfolio/$ufile' alt=''>
    </a>
    <!-- Case Studies Overlay -->
    <a href='portdetail.php?id=$id' class='case-studies-overlay'>
        <!-- Overlay Text -->
        <span class='overlay-text text-center p-3'>
            <h3 class='text-white mb-3'>$port_title</h3>
            <p class='text-white'>$port_desc.</p>
        </span>
    </a>
</div>
</div>
";
}
?>

                </div>

            </div>
        </section>
        <!-- ***** Portfolio Area End ***** -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Stories Impact</h2>
                </div>
            </div>
        </div>
        <!-- Portfolio Items -->
        <div>
            <div class="card mb-3" style="padding: 1.25rem;" onmouseover="this.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)'" onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/welcome/child.jpg" style="height:150px; width:100%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1>Education</h1>
                    <p class="card-text" style="font-size:18px;">RASHEED Foundation runs a five-year programme to facilitate school readiness for children aged 4-6 years from low-income communities. The idea is to build a strong language and social skills foundation in a safe, secure, 
                    and happy learning environment.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="padding: 1.25rem;" onmouseover="this.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)'" onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/welcome/children.jpg" style="height:150px; width:100%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1>The Health Camps</h1>
                    <p class="card-text" style="font-size:18px;">Rasheed Foundation recognizes the challenges of the 
                    underprivileged to access primary healthcare. We therefore organize free multispecialty health camps 
                    across geographies which includes a thorough check up by a doctor, distribution of free medicines along with 
                    specialized tests namely monitoring. Such health camps address immediate health care needs of 
                    the marginalized communities. We have organized 10 camps till September 2019.</p>
                    </div>
                </div>
                </div>
            </div>

            <div class="card mb-3" style="padding: 1.25rem;" onmouseover="this.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.3)'" onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/welcome/rep.jpg" style="height:150px; width:100%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1>Livelihood</h2>
                    <p class="card-text" style="font-size:18px;">Rasheed Foundation envisages India to develop into a country with highly 
                    skilled workforce, inclusive and thriving communities, and access to equal opportunity across distinctions of gender and income. 
                    To achieve this ambition, we work with vulnerable sections of the 
                    country’s population to build their capacity and agency.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>

        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->


                        <div class="section-heading text-center">
                            <h2 class="text-white"><?php print $test_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4"><?php print $test_text;?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Client Reviews -->
                    <div class="client-reviews owl-carousel">
                        <!-- Single Review -->



                        <?php
				   $q="SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$name="$ro[name]";
	$position="$ro[position]";
    $message="$ro[message]";
    $ufile="$ro[ufile]";

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
                            $message = mysqli_real_escape_string($con, $_POST['message']);

                            // Perform form validation
                            if (strlen($name) < 5 || strlen($message) < 10 || strlen($phone) < 8) {
                                $errormsg = "Please fill in all required fields correctly.";
                            } else {
                                // Insert data into the database
                                $query = "INSERT INTO begining_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

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
