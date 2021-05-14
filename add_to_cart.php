<?php
session_start();
class add_to_cart{

function addProduct($pid, $qty)
{
    $_SESSION['cart'][$pid]['qty']=$qty;       
}
function updateProduct($pid, $qty)
{
    if(isset($_SESSION['cart'][$pid])){
      $_SESSION['cart'][$pid]['qty']=$qty; 
    }
}
function removeProduct()
{
    if(isset($_SESSION['cart'][$pid])){
        // unsset($_SESSION['cart'][$pid]);
      }
}
function emptyProduct()
{
    // unsset($_SESSION['cart']);
}

function totalProduct()
{
  if(isset($_SESSION['cart'])){
    return count($_SESSION['cart']);
  }
  else
  {
    return 0;
  }
}


}



?>