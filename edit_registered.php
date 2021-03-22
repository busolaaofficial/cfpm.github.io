<?php include_once './bible_college_nav.php';?>


<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailID = $_POST['emailID'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $next_of_kin = $_POST['next_of_kin'];
    $contactAddress = $_POST['contactAddress'];
?>
 
<div class="main_container">

<div class="form_container">


<span class="formDiv">

Registration Form
</span><br/>


  <hr/>
    
    <form action="edit_registered2.php" method="POST">
    <input type="text" name="firstName" value="<?php echo $row->firstName; ?>" />
   <input type="text" name="lastName" value="<?php echo $row->lastName; ?>" />
   <input type="text" name="emailID" value="<?php echo $row->emailID; ?>" />
   <input type="text" name="age" value="<?php echo $row->age; ?>" />
   <input type="text" name="phone_number" value="<?php echo $row->phone_number; ?>" />
   <input type="text" name="next_of_kin" value="<?php echo $row->next_of_kin; ?>" />
   <input type="text" name="contactAddress" value="<?php echo $row->contactAddress; ?>" />
   <button name="btnclick">Submit</button>
     </form>
 
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
        


      $sql = "INSERT INTO reg_table(firstName, lastName, emailID, age, phone_number, next_of_kin, contactAddress) VALUES (:firstName, :lastName, :emailID, :age, :phone_number, :next_of_kin, :contactAddress)";

      $stmt = $pdo->prepare($sql);
   
      $stmt->execute(["firstName"=>$firstName, "lastName"=>$lastName, "emailID"=>$emailID, "age"=>$age, "phone_number"=>$phone_number, "next_of_kin"=>$next_of_kin, "contactAddress"=>$contactAddress]);
    
     }
     
   
     ?>

  </div>
 
  
  </div>
 

  </div>



<style>
.main_container{
  background-color:#fff;
  width:100%;
  
}
.formDiv{
  font-size:30px;
  text-align:center;
  text-transform:uppercase;
  margin-left:20%;
  margin-bottom:20px;
   padding-top:20px;
}
.form-Div{
  font-family: sans-serif;
   text-align:center!important;
   font-size:15px;
  margin-left:3%;
   padding:5px;
   padding:60px;
   margin-bottom:20px;
}

.form_container img{
  width:100%;
  height:20vh;
}

.form_container{       
    width: 45%!important;
    height:110%!important;
    margin-left: 20px;
    border: 1px #e0e0e0 solid;
    padding: 18px;
    margin-bottom: 40px!important;
    border-radius: 3px;
    margin-left:27%;
    margin-top:3%!important;
   border-radius:5px;
   
}
.form_container div{
  text-shadow: #000 0.1em 0.1em 0.1em 0.1em;
}

.form_container{
    display: inline-block;
    margin-bottom: 12px;
    padding:5%;
    font-size: 24px;
    color: #252525;
    background-color: rgb(240, 240, 240);
    padding:5px;
    width:80%;
    margin-top:3px;
    /* text-shadow: #000 0.1em 0.1em 0.1em; */
}
.form_container input, textarea{
display:inline-block;
width: 80%;
height: 40px;
margin-bottom: 7px;
border: 1px #e0e0e0 solid;
margin-left:8%;
padding:5px;
margin-bottom:15px;
margin-top:3px;
border-radius:5px;

}

.form_container textarea{
    resize: none;
    height: 65px;
    align:center;
}

.form_container button{
    width: 80%;
    height: 35px;
    font-size: 20px;
    color: #eee;
    background-color:rgb(87, 87, 160);
    border: none;
    margin-left:8%;
    border-radius:8px;
   
    }

    .form_container button:hover{
        color:#eee;
        cursor: pointer;
    }




  </style>



<?php include_once './bottom_design.php';?>