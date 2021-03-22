<?php include_once './top_design.php';   ?>



<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $emailID=$_POST['emailID'];
    $country2 =$_POST['country2'];
    ?>
 
<div class="main_container">

</div>
<div class="form_container" style="margin-top:15%!important;">

    <div style="margin-left:30%; padding-bottom:10px; margin-bottom:12px; font-size:30px;">News Letter</div>
    <form action="edit2_user.php" method="POST">
    <input type="text" name="firstName" placeholder="First Name"  value="<?php echo $firstName; ?>" />
    <input type="text" name="lastName" placeholder="Last Name"   value="<?php echo $lastName; ?>" />
    <input type="text" name="emailID" placeholder="Email"   value="<?php echo $emailID; ?>" />
    <input type="text" name="country2" placeholder="Country"   value="<?php echo $country2; ?>" />
    <button class="btn" name="btn_click" style="width:15%;height:40px;margin-bottom:5%;font-size:20px; border:none; margin-left:40px; color:#4d5974">EDIT</button>
     </form>
 
 <?php
     include_once './db_connector.php';
     if(isset($_POST['btn_click'])){
        $firstName = $_POST['firstName']; 
        $lastName = $_POST['lastName']; 
        $emailID = $_POST['emailID'];
        $country2= $_POST['country2'];
        


        $sql =  "INSERT INTO cfpm_table(firstName, lastName, emailID, country) VALUES(:firstName, :lastName, :emailID, :country2)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName, "emailID"=>$emailID,  "country2"=>$country2]); 
        echo 'Your form has been Received!';

  

}
   ?>


 
  
 
 </div>

  </div>



<style>
.main_container{ 
  background:url('images/PRAYER.jpg');
  background-size:cover;
  width:100%;
  height:150vh;
}

.main_container::after{
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 82%;
    background-color: #000;
    opacity: 0.6;
}
.formDiv{
  font-size:30px;
  text-align:center;
  text-transform:uppercase;
  margin-left:30%;
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
    height:50%!important;
    margin-left: 20px;
    border: 1px #e0e0e0 solid;
    padding: 18px;
    margin-bottom: 24px;
    border-radius: 3px;
    margin-left:27%;
    margin-top:70%;
   border-radius:5px;
   position:absolute
}
.form_container div{
  text-shadow: #000 0.1em 0.1em 0.1em 0.1em;
}

.form_container{
    display: inline-block;
    padding:5%;
    font-size: 24px;
    color: #252525;
    background-color: rgb(240, 240, 240);
    padding:5px;
    width:80%;
}
.form_container input, textarea{
display:inline-block;
width: 80%;
height: 40px;
margin-bottom: 7px;
border: 1px #e0e0e0 solid;
margin-left:8%;
padding:5px;
margin-bottom:30px;
margin-top:3px;


}

.form_container textarea{
    resize: none;
    height: 65px;
    align:center;
}

.form_container button{
    width:80%!important;
    height: 35px;
    font-size: 20px;
    color: #eee!important;
    background-color:rgb(87, 87, 160);
    border: none;
   
    }

    .form_container button:hover{
        color:#eee;
        background:linear-gradient(#047849, #04935a,#02ae6a, #02d480,#12ed8d );
        cursor: pointer;
    }




  </style>

<?php include_once './bottom_design.php';   ?>