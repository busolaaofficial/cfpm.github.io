<?php include_once './bible_college_nav.php';?>

<?php
     include_once './db_connector.php';
if (isset($_POST['btnclick'])){
   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailID = $_POST['emailID'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $next_of_kin = $_POST['next_of_kin'];
    $contactAddress = $_POST['contactAddress'];


   $sql = "INSERT INTO reg_table(firstName, lastName, emailID, age, phone_number, next_of_kin, contactAddress) VALUES (:firstName, :lastName, :emailID, :age, :phone_number, :next_of_kin, :contactAddress)";

   $stmt = $pdo->prepare($sql);

   $stmt->execute(["firstName"=>$firstName, "lastName"=>$lastName, "emailID"=>$emailID, "age"=>$age, "phone_number"=>$phone_number, "next_of_kin"=>$next_of_kin, "contactAddress"=>$contactAddress]);
 

  

  ?>
  <?php
  echo '<h1 style="margin-left:30%; margin-top:8%; color:rgb(87, 87, 160);"> Your form has been Received!</h1>';
   
  }                                              
  ?>

<?php include_once './bottom_design.php';?>