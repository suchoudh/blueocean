<?php 
include ('add_to_cart.php');

    $pid = $_POST['pid'];
    $qty = $_POST['qty'];
    $type = $_POST['type'];


$obj = new add_to_cart();

if($type=='add')
{
    $obj->addProduct($pid, $qty); 
}
echo $obj->totalProduct();
?>
