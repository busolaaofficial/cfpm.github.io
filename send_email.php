<?php include_once './top_design.php';?>

<?php
include_once './db_connector.php';

if(isset($_POST['btnSend'])){
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$emailID = $_POST['emailID']; 
$country = $_POST['country']; 

$sql = "INSERT INTO cfpm_table(firstName,lastName,emailID,country) VALUES(:firstName,:lastName,:emailID,:country)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName,"emailID"=>$emailID,"country"=>$country]); 
 
?>
<?php
echo '<h1 style="margin-left:20%; margin-top:8%; color:rgb(87, 87, 160);">Thank you for registering to get updates from CFPM.</h1>';
 
}                                              
?>




<?php include_once './bottom_design.php'; ?>