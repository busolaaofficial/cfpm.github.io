<?php include_once './top_design.php';?>



<div class="form_container">


<span class="formDiv">

            <form action="donate2.php" method="POST">
           <input type="text" name="firstName" placeholder="FULL NAME"  required="required"/> 
           <input type="text" name="number1" placeholder="PHONE NUMBER" required="required"/>
           <input type="email" name="emailID" placeholder="Email ID" required="required"/>
           <select name="TYPE_OF_DONATION" style="border:none; width:83%; margin-left:14px; height:45px; border-radius:5px; margin-bottom:12px;" required="required">

<option value="Offering">Offering</option>
<option value="Tithe">Tithe</option>
<option value="Free Giving">Free Giving</option>
<option value="Developmental Fee">Developmental Fee</option>
 
</select>

           <input type="number" name="amount" placeholder="AMOUNT" required="required" />
          <button  name="btnSend">Donate</button> 
           
            </form>
 

</span>

  </div>
 
  </div>

  <?php include_once './email.php';?>

<style>
  @media(max-width: 700px){
  .form_container{
    background-color:blue!important;
  
  }
  
  }

.formDiv{
  font-size:30px;
  text-align:center;
  text-transform:uppercase;
  margin-left:30%;
   padding-top:20px;
}

.form_container{       
    width: 45%!important;
    height:70%!important;
    margin-left: 20px;
    border: 1px #e0e0e0 solid;
    padding: 18px;
    margin-bottom: 50px!important;
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
    background-color: #eee;
    padding:3px;
    width:40%!important;
    margin-top:3px;
}
.form_container input, textarea{
display:inline-block;
width: 80%;
height: 40px;
margin-bottom: 7px;
border: 1px #e0e0e0 solid;
margin-left:3%;
padding:7px;
margin-bottom:15px;
margin-top:3px;
border-radius: 5px;


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
    background:rgb(87, 87, 160);
    border: none;
    margin-left:7%;
    border-radius: 8px;
    margin-top:20px;
   
    }

    .form_container button:hover{
        color:#252525;
        cursor: pointer;
    }




  </style>





</div>
<style>
.main_container{
color:rgb(87, 87, 160);
font-size:60px;
text-align:center;
display:flex;
background-size:cover;
} */


</style>
<?php include_once './bottom_design.php';?>