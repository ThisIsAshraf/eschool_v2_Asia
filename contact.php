<?php
include_once('./Partials/_dbconnect.php');
// Query to insert Data into DB
if(isset($_POST['contactSubmitBtn'])){

    if(isset($_POST['visitor_name']) || isset($_POST['visitor_email']) || isset($_POST['visitor_phone']) || isset($_POST['visitor_subject']) || isset($_POST['visitor_message'])){
        $visitor_name = $_POST['visitor_name'];
        $visitor_email = $_POST['visitor_email'];
        $visitor_phone = $_POST['visitor_phone'];
        $visitor_subject = $_POST['visitor_subject'];
        $visitor_message = $_POST['visitor_message'];
    
        $sql = "INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_phone`, `contact_query_title`, `contact_message`) VALUES ('$visitor_name', '$visitor_email', '$visitor_phone', '$visitor_subject', '$visitor_message')";
        if($connection ->query($sql) == TRUE){
            $statusMessage = '<div class="alert alert-success alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Well Done!! Your Response has been Submitted!! !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            $statusMessage = '<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
            <strong>Failed to Submit !!</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }else{
        echo $successMessage ='<div class="alert alert-danger alert-dismissible fade show col-sm-6 ml-5 mt-2" role="alert">
        <strong>All Fields are required !!</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

   
}

?>


<div class="container mt-4">
    <!-- Start Conatct Container  1st Column -->
    <h2 class="text-center mb-4">Conatct US</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST" id="contact-form">
                <input type="text" name="visitor_name" id="visitor_name" class="form-control mt-2" placeholder="Name"
                    autocomplete="off" required>
                <input type="text" name="visitor_email" id="visitor_email" class="form-control mt-2" placeholder="Eamil"
                    autocomplete="off" required>
                <input type="text" name="visitor_phone" id="visitor_phone" class="form-control mt-2" placeholder="Phone"
                    autocomplete="off" required>
                <input type="text" name="visitor_subject" id="visitor_subject" class="form-control mt-2"
                    placeholder="Query Title" autocomplete="off" required>
                <textarea name="visitor_message" id="visitor_message" class="form-control mt-2" style="height: 150px;"
                    placeholder="How can we help you" required></textarea><br>
                <span id="successMessage"></span>
                <button type="submit" class="btn btn-primary text-center btn-block outline-none" name="contactSubmitBtn"
                    id="contactSubmitBtn">Submit</button><br><br>
            </form>

        </div>

        <!-- End Conatct Container 1st Column -->

        <!-- Start Conatct Container 2nd Column -->
        <div class="col-md-4 stripe text-white text-center">
            <h4>eSchool</h4>
            <p>eSchool,
                The Place,
                Jalan Tenkokart , </br>
                Cyberjaya 6300, Selangor </br>
                Phone: +601139275791
                www.eschool.com</p>
        </div>
    </div>
    <!-- End Conatct Container 2nd Column -->
</div>