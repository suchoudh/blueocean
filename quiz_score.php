<?php 
include ('includes/top.inc.php');
include ('includes/header.inc.php');
include ('admin/connection.php');
?>
  <!-- ----------------------------------------------------------------- -->
<style>

#admin-content{
    padding: 20px 0;  
    min-height:400px;
}
#admin-content .admin-heading{
    font-size: 35px;
    margin: 0 0 15px;
}
#admin-content .add-new{
    color: #fff;
    background-color: #0281c5;
    font-size: 15px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    padding: 7px 10px;
    margin: 0 0 20px;
    display: block;
    transition: all 0.3s;
}
#admin-content .add-new:hover{
    text-shadow: 0 0 3px #000;
    box-shadow: 3px 3px 0 rgba(0,0,0,0.2);
}
#admin-content .content-table{
    border: 1px solid #000;
    width: 100%;
    margin: 0 0 20px;
}
#admin-content .content-table thead{
    color: #fff;
    background-color: #333;
}
#admin-content .content-table th{
    padding: 10px;
    border: 1px solid #fff;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
}
#admin-content .content-table tbody{
    color: #333;
}
#admin-content .content-table tbody tr{
    background-color: #e7e7e7;
}#admin-content .content-table tbody tr:nth-child(even){
    background-color: transparent;
}
#admin-content .content-table tbody td{
    padding: 10px;
    border: 1px solid #fff;
    text-align: center;
}
#admin-content .content-table tbody td:nth-child(2){
    text-align: left;
}
#admin-content .admin-pagination{
    margin: 0;
}
#admin-content .admin-pagination li a{
    display: block;
}
.mptfs {
  animation-name: example1;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

@keyframes example1 {
  0%   {color:#2E8B57;}
  25%  {color:#556B2F;}
  50%  {color:#228B22;}
  75%  {color:#008000;}
  100% {color:#006400;}
}
.mybtn:focus
{
    /* display:none !important; */
}
</style>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <!-- <h1 class="admin-heading">Search contact details</h1> -->
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->

                  <h4 class="text-center mptfs">MPTFS Wildlife Quiz June 2020</h4>
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label class="text-primary">Enter Email or Mobile For Search</label>
                          <input type="text" id="email" name="email" class="form-control" placeholder="Email or Mobile">
                      </div>
                      <a id="search" href="javascript:void(0);" name="save" onclick="myFunction()" class="btn btn-primary"> Search </a>                      
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
<br><br>
<div class="container">
          <div class="row">
              <div class="col-md-12">
                  <!-- <h1 class="admin-heading">Search contact details</h1> -->
              </div>
              <div class="col-md-offset-3 col-md-6" id="customer_result">    
              
              <img src='img/logo/mptfslogo.png' alt='MPTFS Logo' width='100px' height='' style="margin-left:50%; transform:translate(-50%); opacity:0.4;">
              
              </div>
          </div>
      </div> 
  </div>
<?php 
include ('includes/counter.inc.php');
?>

<br><br>
  <!-- ----------------------------------------------------------------- -->
<?php   
include ('includes/footer.inc.php');
?>

<script>

function myFunction(){ 
    var mail_value = $("#email").val();

 $.ajax({        
      url: 'customer_search.php',
      type: 'post',
      data: 'email='+mail_value,     
      success: function(data , status){         
        $("#customer_result").html(data); 
        $("#email").val("");              
  }});
}
</script>
       