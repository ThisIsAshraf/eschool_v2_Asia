<?php include_once('./Partials/header.php');?>
<!-- Start Payment Status Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/payment-status.jpg" alt="Cousrses"
            style="height: 800px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End Payment Status Banner -->

<!-- Start Payment Container -->
<div class="container">
    <h2 class="text-center my-3 font-weight-bold">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label for="" class="offset-sm-4 col-form-label text-uppercase font-weight-bold">Order ID</label>
            <div>
                <input type="text" name="order_id" id="order_id" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" value="View" class="btn btn-primary mx-4 pl-3 text-center">
            </div>
        </div>
    </form>
</div>
<!-- End Payment Container -->

<!-- Including Contact US -->

<div class="container text-center">
    <?php include_once('./contact.php')?>
</div>

<?php include_once('./Partials/footer.php');?>