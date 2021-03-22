 <!DOCTYPE html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Christ Fountain of Prayer Ministries</title>
<link rel="Shortcut Icon"  href="images/logo.png">
<link rel="stylesheet" href="style/style.css">
<script src="javascript/jquery.js" type="text/javascript"></script>
<script src="javascript/menu.js" type="text/javascript"></script>
</head>

<nav>
    <div id="logoDiv">
      <img src="images/logo.png" alt="icon" />
      <div  class="cfpm" style="vertical-align:top;">Christ Fountain of Prayer <div style="text-align:center; width:100%;">Ministries</div></div>
    </div>
    <div id="menuDiv">
      <ul>
        <a href="CFPM.php" title="Go to Homepage"><li>Home</li></a>
        <a href="about.php" title="About us"><li>About</li></a>
         <a href="donation.php" title="Donation"><li>Donation</li></a> 
         <a href="location.php" title="Location"><li>Location</li></a> 
         <a href="All_Users.php" title="Location"><li>All Users</li></a> 
         <a href="bible_college.php" title="Bible College"><li>Bible College</li></a> 
         
        </ul>
    </div>
    <span id="mobile_menu_icon" >
      &#9776;
    </span>
    </nav>

    <a href="#" class="searchCaption" >&telrec;</a>
   
   <div class="searchDiv"> 
   <input autocomplete="off" type="text" class="search" value="Search Product" onkeyup= "return queryData(this.value);"/>
          <span class="CloseSpan" style="width:13px; padding-left:8px; padding-bottom:5px; height:30px;  border-radius:50%;color:#eee; border: 3px #eee solid;">  &times; </span>
        <div id="searchResult" ></div>
          </div>
<style>

.logoDiv img, .cfpm{
  display:inline-block;
}
.cfpm{
  margin-top:8px!important;
  font-size:18px;
  color: rgb(87, 87, 160);
  
}
@media(max-width: 700px){
  .logoDiv, .mobile_menu_icon{
    display:block!important;
  }
}

</style>