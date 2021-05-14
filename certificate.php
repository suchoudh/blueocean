<?php
include ("includes/connection.inc.php");
if(isset($_POST['c_download']))
{
    $id = $_POST['c_download']; 
}
$sql = "SELECT * FROM `customer_data` WHERE `c_id`= '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['c_name'];

$data = <<<ANOOP
<style> *{padding:0;margin:0;}.content_area {position:fixed;top:0;left:0; }.content1 {position:absolute; z-index:999; top:40%; left:51%; transform:translate(-50%,-50%); text-align:left; color:#A5822A; }
</style>
<div class="content_area">
<img src="dompdf/certificate.jpg" alt="" width="100%" height="780px">
</div>
<div class="content1">
<h1> $name </h1>
<div>
ANOOP;

// Include autoloader 
require_once 'dompdf/autoload.inc.php'; 
 
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 

// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

// Load content from html file 
// $html = file_get_contents("work.php"); 
$dompdf->loadHtml($data); 

// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
// $dompdf->setPaper('A4'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF (1 = download and 0 = preview) 
$dompdf->stream("codexworld", array("Attachment" => 0));


?>