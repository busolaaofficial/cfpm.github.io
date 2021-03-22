<?php include_once './top_design.php';?>



<?php
$count_counter=0;
include_once './db_connector.php';
$sql = "SELECT * from cfpm_table";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$count = $stmt->rowCount();
$rows = $stmt->fetchAll();?>


<h1  style="margin-left:5%; margin-bottom:0px; font-weight:lighter;">All Users: <?php echo $count ?></h1>
<table style= "width:60%;" align="center" border="1">
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Country</th>
<th>Edit</th>
<th>Delete</th>
</tr>


<?php
foreach ($rows as $row) { 
     ?>

<tr> 
        <td><?php echo ++$count_counter; ?></td>
        <td><?php echo $row->firstName; ?></td>
        <td><?php echo $row->lastName; ?></td>
        <td><?php echo $row->emailID; ?></td>
        <td><?php echo $row->country2; ?></td>
          
        
        
        
        <td>
            
    <form action="edit_user.php" method="POST">
    <input type="hidden" name="firstName" value="<?php echo $row->firstName; ?>" />
   <input type="hidden" name="lastName" value="<?php echo $row->lastName; ?>" />
   <input type="hidden" name="emailID" value="<?php echo $row->emailID; ?>" />
   <input type="hidden" name="country2" value="<?php echo $row->country2; ?>" />
   
   
          <button >Edit</button>
          </form>
        
        
        </td>

          <td>
    <form action="delete_user.php" method="POST">
    <input type="hidden" name="emailID" value="<?php echo $row->emailID; ?>" />
    <button onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
    </form>
      
        
        
        </td>
        
</tr>

<?php } ?>
</table>

<style>

table{
width: 90%!important;
margin:0 auto;
/* border: 1px  #e8e8e8 solid; */
border-collapse: collapse;
margin-bottom:12px;
}

th,td{
    border: 1px #ccc solid;
    padding: 8px;
    text-align: left;
    color:#5b5b5b;
}
</style>

<?php include_once './bottom_design.php' ;?>


