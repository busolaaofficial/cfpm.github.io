<?php
include_once './db_connector.php';

if(isset($_POST['btn_click'])){
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$emailID = $_POST['emailID'];
$country2= $_POST['country2'];

 

$sql = "UPDATE cfpm_table SET firstName= :firstName, lastName= :lastName, emailID= :emailID, country2= :country2 WHERE emailID=:emailID";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName,  "emailID"=>$emailID, "country2"=>$country2]); 
 ?>
<script>
document.location="All_Users.php";
</script>
<?php
 
}                                              
?>