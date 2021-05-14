<style> 
.score {
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0%   {color:red;}
  25%  {color:pink;}
  50%  {color:blue;}
  75%  {color:green;}
  100% {color:orange;}
}
</style>
<?php
include ('admin/connection.php');
if($_POST['email'])
{
   $email = $_POST['email'];
   $newgmail = substr($email, -10, 10); 
   $newgmail0 = "0".substr($email, -10, 10); 
   $newgmail91 = "+91".substr($email, -10, 10);  

    $sql = "SELECT * FROM `wildlife_june` WHERE `c_email`= '$email' || `c_mobile`= '$email' || SUBSTRING(c_mobile, -10) = '$newgmail' || SUBSTRING(c_mobile, -10) = '$newgmail0' || SUBSTRING(c_mobile, -10) = '$newgmail91'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rowcount=mysqli_num_rows($result);
    
    if($rowcount)
    {
        $id = $row["c_id"]??"";
        $c_name = $row["c_name"]??"";
        $c_score = $row["c_score"]??"";
        $c_email = $row["c_email"]??"";
        // $c_address = $row["c_address"]??"";    
        

        $mydata = "<div class='card text-center'>";
        $mydata .= "<div><h6>Welcome $c_name </h6>"; 
        $mydata .= "<h4> Your Score is <span class='text-danger score'> $c_score </span> </h4>";
        // $mydata .= "<p> <strong> Address you mentioned during Quiz submission </strong> </br> $c_address</p>";
        $mydata .= "<br/><img src='img/logo/mptfslogo.png' alt='MPTFS Logo' width='100px' height=''>";   
        $mydata .= "</div>"; 
        $mydata .= "</div>";
          
        echo $mydata;
    }
    else{
     ?>
        
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"  style="margin-top: 60px;">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Hello Friend</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">       
          <!-- <span aria-hidden="true">×</span> -->
        </button>
      </div>
      <div class="modal-body">
        <p class="text-primary text-justify">The Mail ID / Mobile Number you entered doesn't matches with our records.
Please ensure that you are entering the exact same Mail ID / Mobile Number which you used at the time of quiz submission. </p>
      <p class="text-primary text-justify">For any issues kindly Whatsapp your name / Mail ID / Mobile Number on 9922951184.</p>
      </div>
      <div class="modal-footer">
      <img src='img/logo/mptfslogo.png' alt='MPTFS Logo' width='40px' height='' style="float:left;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
      </div>
    </div>
  </div>
</div>
  <script>
 $('#exampleModal1').modal('show');
 </script>

<?php
    }   
}
else
{
?>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="margin-top: 60px;">
      <div class="modal-header">
      <h6 class="modal-title" id="exampleModalLabel">Hello Friend</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">×</span> -->
        </button>
      </div>
      <div class="modal-body">
      <p class="text-primary text-justify"> You have not entered anything.</p>
        <p class="text-primary text-justify"> Please enter the exact same Mail ID / Mobile Number which you used at the time of quiz submission.</p>
      </div>
      <div class="modal-footer">
      <img src='img/logo/mptfslogo.png' alt='MPTFS Logo' width='40px' height='' style="float:left;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
      </div>
    </div>
  </div>
</div>
  <script>
 $('#exampleModal1').modal('show');
 </script>
 <?php


}

?>
