<!-- View Contestants Modal -->
<?php 
include('../controllers/dbconnect.php');
$query = "SELECT * FROM users";
$results = mysqli_query($con, $query);

while($row = mysqli_fetch_array($results)) {
    $regno = $row['regno'];
}
?>
<div class="modal fade" id="contview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">use</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="text-center">
        <img src="../uploads/<?php echo $regno; ?>" class="rounded-circle" alt="..." style="width: 200px;">
      </div>
      <?php

        $sql = "SELECT * FROM users order by date ASC";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            }
        }else {
            echo "<td><p>No Contestants Yet!</p></td>";
        }
        ?>
        <?php echo 
        $row['first_name']
        ;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- View Contestants Modal -->