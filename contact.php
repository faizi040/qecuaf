<?php 
    include("inc/header.php"); 
    $mess="";
    if (isset($_POST['save_contact'])) {
        $data=array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'subject' => $_POST['subject'],
            'message' => $_POST['message'],
            'status' => 1
        
        );
        $fet=$fun->insert_data("contact",$data);
        if ($fet) {
            $mess="Message Successfull Sent";
        }else{
            $mess="No Sent ";
        }
    }
?>

    <div class="container-fluid bg-dark text-white text-center  py-5">
        <h3>GET IN TOUCH</h3>
        <div class="pt-3 block_text">

            <a href="index.php">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>
        </div>

    </div>


    <div class="container p-4">
      
        <p class="text-secondary text-center">Use below to reach out to Quality Enhancement Cell, UAF.</p>
        <p class="text-secondary text-center">To receive general information relevant to our office, please fill out the
            form. You will be contacted by a member of our staff who will give you all the information you need.</p>
        <b><?php if (isset($mess)) { echo $mess; }  ?></b>

        <div class="row">
            <div class=" col-md-6 col-12">
                <form action="" role="form" method="post">
                    <div class="mb-3 form">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Name <sup
                                class="text-danger">*</sup></label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" data-validation="required" required="">
                    </div>
                    <div class="mb-3 form">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email <sup
                                class="text-danger">*</sup></label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" data-validation="required" required="">
                    </div>
                    <div class="mb-3 form">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Phone <sup
                                class="text-danger">*</sup></label>
                        <input type="number" name="mobile" class="form-control" id="exampleFormControlInput1" data-validation="required" required="">
                    </div>
                    <div class="mb-3 form">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Subject <sup
                                class="text-danger">*</sup></label>
                        <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" data-validation="required" required="">
                    </div>

                    <div class="mb-3 form">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Message <sup
                                class="text-danger">*</sup></label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4" data-validation="required" required=""></textarea>
                    </div>
                    <div class="form ">
                        <button type="submit" name="save_contact" class="btn btn-primary btn-form text-dark">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12 form-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.5048532194483!2d73.07360931462848!3d31.4277655588546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922421d9937f131%3A0x129b74d67c73a16d!2sUniversity%20of%20Agriculture%20-%20UAF!5e0!3m2!1sen!2s!4v1659070745670!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
<?php include("inc/footer.php"); ?>