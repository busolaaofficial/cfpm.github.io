<?php include_once './top_design.php';?>

<?php
include_once './db_connector.php';

if(isset($_POST['btnSend'])){
$firstName = $_POST['firstName']; 
$number1 = $_POST['number1']; 
$emailID = $_POST['emailID']; 
$TYPE_OF_DONATION = $_POST['TYPE_OF_DONATION']; 
$amount = $_POST['amount']; 

$sql = "INSERT INTO donate_table(firstName,number1,emailID,TYPE_OF_DONATION,amount) VALUES(:firstName,:number1,:emailID,:TYPE_OF_DONATION, :amount)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"number1"=>$number1,"emailID"=>$emailID,"TYPE_OF_DONATION"=>$TYPE_OF_DONATION, "amount"=>$amount]); 
 
?>
<?php
echo '<h1 style="margin-left:50%; margin-top:8%; color:rgb(87, 87, 160);">BANK</h1>';
 
}                                              
?>




<?php include_once './bottom_design.php'; ?>