<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>

        <main class="container">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="" method="post">

                        <!--Grid row-->
                        <div class="row">
                            
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="fName" class="">First name</label>
                                    <?php if(isset($_SESSION['client_id'])) { ?>
                                        <input type='text' id='fName' name='fName' class='form-control' value='<?= $_SESSION['fName']?>' readonly disabled>
                                    <?php } else { ?>
                                        <input type='text' id='fName' name='fName' class='form-control'>
                                    <?php } ?>
                                </div>
                            </div>
                            <!--Grid column-->


                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="lName" class="">Last name</label>
                                    <?php if(isset($_SESSION['client_id'])) { ?>
                                    <input type="text" id="lName" name="lName" class="form-control" value="<?= $_SESSION['lName']?>" readonly disabled>
                                    <?php } else { ?>
                                        <input type='text' id='lName' name='lName' class='form-control'>
                                        <?php } ?>
                                </div>
                            </div>
                            <!--Grid column-->


                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">                                    
                                    <label for="email" class="">Your email</label>
                                    <?php if(isset($_SESSION['client_id'])) { ?>
                                    <input type="text" id="email" name="email" class="form-control" value="<?= $_SESSION['email']?>" readonly disabled>
                                    <?php } else { ?>
                                        <input type='text' id='email' name='email' class='form-control'>
                                        <?php } ?>
                                </div>
                            </div>
                            <!--Grid column-->



                              <!--Grid column-->
                              <div class="col-md-6">
                                <div class="md-form mb-0">                                    
                                    <label for="phone" class="">Your phone</label>
                                    <?php if(isset($_SESSION['client_id'])) { ?>
                                    <input type="phone" id="phone" name="phone" class="form-control" value="<?= $_SESSION['phone']?>" readonly disabled>
                                    <?php } else { ?>
                                         <input type='text' id='phone' name='phone' class='form-control'>
                                         <?php } ?>
                                </div>
                            </div>
                            <!--Grid column-->




                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row mb-4">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="content" rows="2" class="form-control md-textarea"></textarea>
                                    
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    

                    <div class="text-center text-md-right">
                    <button name="action" type="submit" class="btn btn-primary">Send</button>

                    </form>
                    
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <hr>
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>821 Sainte Croix Ave, Saint-Laurent, Quebec H4L 3X9</p>
                        </li>
                        <hr>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>(514) 744-7500</p>
                        </li>
                        <hr>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>zawss@fakeemail.com</p>
                        </li>
                        <hr>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </main>



    </body>
</html>