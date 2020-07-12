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
                                                        <h6 class="m-b-20">Total Sales</h6>
                                                        <h2 class="text-right"><i class="ti-tag f-left"></i><span>1641</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-yellow order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Revenue</h6>
                                                        <h2 class="text-right"><i class="ti-reload f-left"></i><span>$42,562</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card bg-c-pink order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Profit</h6>
                                                        <h2 class="text-right"><i class="ti-wallet f-left"></i><span>$9,562</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- order-card end -->

											<!-- tabs card start -->
                                            <div class="col-sm-12">
                                                <div class="card tabs-card">
                                                    <div class="card-block p-0">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i class="fa fa-users"></i>4-9yrs</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-users"></i>10-15yrs</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><i class="fa fa-users"></i>16-21yrs</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#settings3" role="tab"><i class="fa fa-users"></i>22-28yrs</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content card-block">
                                                            <div class="tab-pane active" id="home3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>First Name</th>
                                                                            <th>Last Name</th>
                                                                            <th>Phone Number</th>
                                                                            <th>Performance</th>
                                                                            <th>Reg No</th>
                                                                        </tr>
                                                                        <?php
                                                                        $sql = "SELECT * FROM users order by date DESC";
                                                                        $result = mysqli_query($con, $sql);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            // output data of each row
                                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<tr>";
                                                                        echo "<td>" .$row['id']. "</td>";
                                                                        echo "<td>" .$row['first_name']. "</td>";
                                                                        echo "<td>" .$row['last_name']. "</td>";
                                                                        echo "<td>" .$row['phone_number']. "</td>";
                                                                        echo "<td>" .$row['performance_category']."</td>";
                                                                        echo "<td>" .$row['performance_category']. "</td>";
                                                                        "</tr>";
                                                                            }
                                                                        }else {
                                                                            echo "<td><p>Check your database</p></td>";
                                                                        }
                                                                        ?>
                                                                    </table>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="profile3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>Name</th>
                                                                            <th>Customer</th>
                                                                            <th>Purchased On</th>
                                                                            <th>Status</th>
                                                                            <th>Reg No</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002653</td>
                                                                            <td>Eugine Turner</td>
                                                                            <td>04-01-2017</td>
                                                                            <td><span class="label label-success">Delivered</span></td>
                                                                            <td>#7234417</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002156</td>
                                                                            <td>Jacqueline Howell</td>
                                                                            <td>03-01-2017</td>
                                                                            <td><span class="label label-warning">Pending</span></td>
                                                                            <td>#7234454</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="messages3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>Name</th>
                                                                            <th>Customer</th>
                                                                            <th>Purchased On</th>
                                                                            <th>Status</th>
                                                                            <th>Reg No</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002413</td>
                                                                            <td>Jane Elliott</td>
                                                                            <td>06-01-2017</td>
                                                                            <td><span class="label label-primary">Shipping</span></td>
                                                                            <td>#7234421</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002156</td>
                                                                            <td>Jacqueline Howell</td>
                                                                            <td>03-01-2017</td>
                                                                            <td><span class="label label-warning">Pending</span></td>
                                                                            <td>#7234454</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="settings3" role="tabpanel">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>Name</th>
                                                                            <th>Customer</th>
                                                                            <th>Purchased On</th>
                                                                            <th>Status</th>
                                                                            <th>Reg No</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002413</td>
                                                                            <td>Jane Elliott</td>
                                                                            <td>06-01-2017</td>
                                                                            <td><span class="label label-primary">Shipping</span></td>
                                                                            <td>#7234421</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><img src="assets/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
                                                                            <td>PNG002344</td>
                                                                            <td>John Deo</td>
                                                                            <td>05-01-2017</td>
                                                                            <td><span class="label label-danger">Faild</span></td>
                                                                            <td>#7234486</td>
                                                                        </tr>
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
