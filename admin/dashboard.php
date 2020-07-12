<?php
include('./components/header.php');
include('../controllers/dbconnect.php');
?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Registered Contestants</h6>
                                                        <h2 class="text-right"><i class="ti-user f-left"></i><span><?php
                                                        $countContestants = mysqli_query($con, "SELECT id FROM users");
                                                        echo "<span class=\"h2 font-weight-bold mb-0\">".mysqli_num_rows($countContestants)."</span>";
                                                        ?></span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Uploads</h6>
                                                        <h2 class="text-right"><i class="ti-upload f-left"></i><span>0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Voters</h6>
                                                        <h2 class="text-right"><i class="ti-check-box f-left"></i><span>0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Profit</h6>
                                                        <h2 class="text-right"><i class="ti-wallet f-left"></i><span>₦0</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- order-card end -->

											<!-- tabs card start -->
                                            <div class="col-sm-12">
                                                <div class="card tabs-card">
                                                    <div class="card-block p-0">
                                                        <div class="tab-content card-block">
                                                            <div class="tab-pane active" id="home3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>First Name</th>
                                                                            <th>Last Name</th>
                                                                            <th>Phone Number</th>
                                                                            <th>Category</th>
                                                                            <th>Age Category</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                        <?php
                                                                        $sql = "SELECT * FROM users order by date ASC";
                                                                        $result = mysqli_query($con, $sql);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            // output data of each row
                                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<tr>";
                                                                        echo "<th>" .$row['id']. "</th>";
                                                                        echo "<td>" .$row['first_name']. "</td>";
                                                                        echo "<td>" .$row['last_name']. "</td>";
                                                                        echo "<td>" .$row['phone_number']. "</td>";
                                                                        echo "<td>" .$row['performance_category']."</td>";
                                                                        echo "<td>" .$row['age_category']. "</td>";
                                                                        echo "<td>" .'<button class="btn btn-primary"><i class="icofont icofont-eye-alt"></i></button> <button class="btn btn-danger"><i class="icofont icofont-bin"></i></button>'. "</td>";
                                                                        "</tr>";
                                                                            }
                                                                        }else {
                                                                            echo "<td><p>No Contestants Yet!</p></td>";
                                                                        }
                                                                        ?>
                                                                    </table>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tabs card end -->


                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('./components/footer.php');?>
