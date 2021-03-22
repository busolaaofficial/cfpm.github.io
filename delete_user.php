<?php include_once './top_design.php'; ?>

<?php $emailID= $_POST['emailID'];

include_once './db_connector.php';
$sql = "DELETE FROM cfpm_table WHERE  emailID = :emailID";

   $stmt = $pdo->prepare($sql);

   $stmt->execute([ "emailID"=>$emailID]); ?>
   
  <!-- <script>

Document.location="All_Users.php";

  </script> -->
<?php echo '<b style="font-size:60px; color:red; text-align:center; margin-top:5%;">User Deleted</b>';?>



<?php include_once './bottom_design.php'; ?>