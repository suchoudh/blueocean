<?php include "header.php"; ?>
<?php include "connection.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <!-- <h1 class="admin-heading">Search contact details</h1> -->
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label class="text-primary">Enter Email or Mobile For Search</label>
                          <input type="text" name="cat" class="form-control" placeholder="Email or Mobile" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Search" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>

<?php
$sql = "SELECT * FROM `customer_data` WHERE `c_email`= 'jesalkothary@gmail.c'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container">
          <div class="row">
              <div class="col-md-12">
                  <!-- <h1 class="admin-heading">Search contact details</h1> -->
              </div>
              <div class="col-md-offset-3 col-md-6">
    
                <table class="content-table">
                <tr> <td>Name</td> <td><?php echo $row['c_name']; ?></td></tr>
                <tr> <td>Mobile</td> <td><?php echo $row['c_mobile']; ?></td></tr>
                <tr> <td>Email </td> <td><?php echo $row['c_email']; ?></td></tr>
                <tr> <td>Address</td> <td><?php echo $row['c_address']; ?></td></tr>
                </table>

              </div>
          </div>
      </div>
      

  </div>

<?php include "footer.php"; ?>
