<?php
include ('./components/header.php');
include("../controllers/dbconnect.php");

$id  = $_GET['id'];
$query = "SELECT * FROM messages WHERE id='$id'";
$results = mysqli_query($con, $query);
while($row = mysqli_fetch_array($results)) {
    $id                     = $row['id'];
    $fullName               = $row['fullName'];
    $brandName              = $row['brandName'];
    $phoneNum               = $row['phoneNum'];
    $email                  = $row['email'];
    $comment                = $row['comment'];

    ?>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10"><?php echo $fullName; ?>'s Details</h5>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="sub-title">Message Information</h4>
                                        <form method="post" action="">
                                            <div class="form-group row">
                                                <div class="form-group col-md-6">
                                                    <label><strong>Full Name:</strong></label><br>
                                                    <?php echo $fullName; ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label><strong>Brand Name:</strong></label><br>
                                                    <?php echo $brandName; ?>
                                                <div class="form-group col-md-6">
                                                    <label><strong>Email:</strong></label><br>
                                                    <?php echo $email; ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label><strong>Phone Number:</strong></label><br>
                                                    <?php echo $phoneNum; ?>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label><strong>Comment:</strong></label><br>
                                                    <?php echo $comment; ?>
                                                </div>
                                                <div class="form-group col-md-12 text-center">
                                                    <button class="btn btn-primary" onclick="window.print()">Print</button>
                                                    <button class="btn btn-danger" name="user_delete_btn">Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
<?php }  ?>


<?php include ('./components/footer.php'); ?>