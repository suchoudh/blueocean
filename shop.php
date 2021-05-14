<?php 
include ('includes/top.inc.php');
include ('includes/header.inc.php');
include ('includes/connection.inc.php');
$query =  "SELECT * FROM `products` WHERE `pro_qty` > 0 ";
$result = mysqli_query($conn, $query);
$product=[];
while($row = mysqli_fetch_assoc($result))
{
    $product[] = $row;
}

// if(isset($_SESSION['cart']))
// {
//     echo "<pre>";
    // print_r($_SESSION['cart']);
//     echo "<br>";
//     count($_SESSION['cart']);
// }

?>
  <!-- ----------------------------------------------------------------- -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.5.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="shop.css">

<div class="container">
    <h3 class="h3">BlueOcean Shoping Festival </h3>
    <div class="row">

<?php 
foreach($product as $value)
{
?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="product-details.php?pro_id=<?php echo $value['id'] ?>">
                        <img class="pic-1" src="<?php echo $value['pro_img'] ?>">
                        <img class="pic-2" src="<?php echo $value['pro_img'] ?>">
                    </a>
                    <!-- <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul> -->
                    <span class="product-new-label">New</span>
                    <!-- <span class="product-discount-label">-10%</span> -->
                </div>
                <div class="product-content">
                    <h3 class="title"> <strong> <a href="#"><?php echo $value['pro_name'] ?></a> </strong></h3>
                    <div class="price">
                    <?php  echo 'Price : <span style="color:#444;"> $'.$value['pro_price']. '<span>';?>                       
                        <!-- <span>$16.00</span> -->
                    </div>
                    <div class="price">
                        Qty. 
                        
                        <!-- <select id="qty">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option> 
                        </select>                     -->
                        <select id="qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
                    </div>
               
                
                    <a class="add-to-cart" href="javascript:void(0);" onclick="myFunction('<?php echo $value['id'] ?>', 'add');" >ADD TO CART</a>
                    
                </div>
            </div>
        </div>
<?php 
}
?>

    </div>
</div>
<hr>



  <!-- ----------------------------------------------------------------- -->
<?php 
include ('includes/footer.inc.php');
?>
     <script>
        qty = 1;
        $("select#qty").change(function(){
        qty = $(this).children("option:selected").val();        
        });
    </script>
<script>     

function myFunction(id, type) {
 
   $.ajax({        
        url: 'set_cart.php',
        type: 'post',
        data: 'pid='+id+'&qty='+qty+'&type='+type,     
        success: function(data , status){    
              alert (data);
              $(".has-badge").attr("data-count",data);              
              qty = 1;               
    }});
}

var b = $(".p1").attr("data-count"); 
if(b==0)
{

    $("#ex4 .p1:after").css(
        {           
            "display": "none"           
        }
    ); 

   
}
</script>
