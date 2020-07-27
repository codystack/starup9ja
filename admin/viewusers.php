<?php
include ('./components/header.php');
include("../controllers/dbconnect.php");

$id  = $_GET['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$results = mysqli_query($con, $query);
while($row = mysqli_fetch_array($results)) {
    $id                         = $row['id'];
    $first_name                 = $row['first_name'];
    $last_name                  = $row['last_name'];
    $phone_number               = $row['phone_number'];
    $performance_category       = $row['performance_category'];
    $age_category               = $row['age_category'];
    $email                      = $row['email'];
    $gender                     = $row['gender'];
    $address                    = $row['address'];
    $date_of_birth              = $row['date_of_birth'];
    $state_of_origin            = $row['state_of_origin'];

    ?>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10"><?php echo $first_name; ?>'s Details</h5>
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
                                        <h4 class="sub-title">Personal Information</h4>
                                        <form method="post" action="">
                                            <div class="form-group row">
                                                <div class="form-group col-md-6">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="last_name" value="<?php echo $email; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Phone Number</label>
                                                    <input type="tel" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Date of Birth</label>
                                                    <input type="text" class="form-control" name="date_of_birth" value="<?php echo $date_of_birth; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Gender</label>
                                                    <input type="tel" class="form-control" name="phone_number" value="<?php echo $gender; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>State of Origin</label>
                                                    <input type="tel" class="form-control" name="state_of_origin" value="<?php echo $state_of_origin; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Age Category</label>
                                                    <input type="text" class="form-control" name="age_category" value="<?php echo $age_category; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Performance Category</label>
                                                    <input type="tel" class="form-control" name="performance_category" value="<?php echo $performance_category; ?>" readonly>
                                                </div>
                                                <div class="form-group col-md-12 text-center">
                                                <button class="btn btn-primary" onclick="window.print()">Print</button>
                                                    <button class="btn btn-secondary" name="user_update_btn">Update</button>
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