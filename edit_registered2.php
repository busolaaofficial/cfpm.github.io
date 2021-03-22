<?php
include_once './db_connector.php';

if(isset($_POST['btn_click'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailID = $_POST['emailID'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $next_of_kin = $_POST['next_of_kin'];
    $contactAddress = $_POST['contactAddress'];


    $sql = "UPDATE reg_table SET firstName= :firstName, lastName= :lastName, emailID= :emailID, age= :age, phone_number= :phone_number, next_of_kin= :next_of_kin , contactAddress= :contactAddress WHERE emailID=:emailID";

   $stmt = $pdo->prepare($sql);

   $stmt->execute(["firstName"=>$firstName, "lastName"=>$lastName, "emailID"=>$emailID, "age"=>$age, "phone_number"=>$phone_number, "next_of_kin"=>$next_of_kin, "contactAddress"=>$contactAddress]);
 

  

  ?>
<script>
document.location="All_Users.php";
</script>
<?php
 
}                                              
?>