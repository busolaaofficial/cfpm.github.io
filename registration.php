<?php include_once './bible_college_nav.php';?>
 
<div class="main_container">

<div class="form_container">


<span class="formDiv">

Registration Form
</span><br/>


  <hr/>
    
    <form action="registration2.php" method="POST">
    <input type="text" name="firstName" placeholder="First Name"/>
    <input type="text" name="lastName" placeholder="Last Name"/>
    <input type="text" name="emailID" placeholder="Email"/>
    <input type="text" name="age" placeholder="Date of Birth(i.e dd/mm/yy"/>
     <input type="text" name="phone_number" placeholder="Phone Number"/>
     <input type="text" name="next_of_kin" placeholder="Next of Kin"/>
    <textarea name="contactAddress" placeholder="Contact Address"></textarea>
   <button name="btnclick">Submit</button>
     </form>
 
 
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