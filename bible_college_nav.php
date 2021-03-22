<html>
<head>
<title>Bible College</title>
<link rel="Shortcut Icon"  href="images/logo.png">
<meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <script src="javascript/jquery.js" type="text/javascript"></script>
        <script src="javascript/menu.js" type="text/javascript"></script>
</head>

<nav>
    <div id="logoDiv">
      <img src="images/logo.png" alt="icon" />
      <div  class="cfpm" style="vertical-align:top;">Bible College </div>

      <a href="CFPM.php"> <div class="back_home" style="vertical-align:top;">Main Home</div></a>
          </div>
   
         
    
    <div id="menuDiv">
      <ul style="margin-right:100px;">
        <a href="bible_college.php" title="Go to Homepage"><li>Home</li></a>
        <a href="about_bible_college.php" title="About us"><li>About</li></a>
         <a href="registration.php" title="register here"><li>Registration</li></a> 
         <a href="all_registered.php" title="All_register here"><li>Registered</li></a> 
         
      
         
        </ul>
    </div>
    <span id="mobile_menu_icon" style="display: none;">
      &#9776;
    </span>
    </nav>


<style>


.back_home{
  margin-left:3%;
  font-size:20px;
 display:inline;
 line-height:55px;
 border:1px #ffff solid;
border-radius:5px;
cursor:pointer;
}
.back_home:hover{
  box-shadow: 0 10px 10px 0 #e8e8ee, 0 3px 8px 0 #252525; 
}


.logoDiv img,.cfpm{
  display:inline-block;
}
.cfpm{
  margin-top:15px!important;
  font-size:18px;
  color: rgb(87, 87, 160);
  
}
html{
   min-height:100%;
  margin:0;
 }
 
 
 body {
        margin: 0;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        min-height:100vh;
        display:flex;
        flex-direction: column;
      }
  
      ul {
        text-align: right;
        margin-left: 40px!important;
      }
  
      li:hover {
        color: #252525!important;
      }
  
      nav {
        background-color: #eee;
        top:0;
        width:100%;
      }
  
      a {
        text-decoration: none;
      }
  
      #logoDiv,#menuDiv {
        display: inline;
      }
    #logoDiv{
      width:20%;
    }
      #logoDiv img {
        width: 65px;
        margin: 4px;
        margin-left: 20px;
      }

      
      #menuDiv {
        width: 70%;
        margin-top: 2px;
        margin-right: 20px;
        position: absolute;
        right: 0;
       
      }
  
      #menuDiv ul li {
        list-style: none;
        display: inline-block;
        color: rgb(87, 87, 160);
        padding: 8px;
      }
  
      #menuDiv ul li:hover {
        
        transition: .7s;
        color:#252525;
        

      }

       
  
      footer {
        background-color: rgb(218, 214, 214);
        color: rgb(87, 87, 160);
        text-align: center;
        padding: 45px;
       margin-top: auto;
       font-size:15px;


      }

      @media (max-width:700px){
        #menuDiv{

          display:none;
        }
        #menuDiv:hover{
            background-color:rgb(87, 87, 160);
            color:#eee;
            transition:.7s;
        }
      }

</style>