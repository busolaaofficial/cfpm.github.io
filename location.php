<?php include_once './top_design.php';?>
<div class="main_container">
<div style="margin-top:50px;width:100%;">Worship with us at our various branches</div>
</div>
<div class="locations">
<a href="oba-ile.php"><div>Oba-ile Branch
</div></a>
<a href="owo.php"><div>Owo Branch</div></a>
<a href="uso.php"><div>Uso Branch</div></a>
</div>

<?php include_once './email.php';?>

<style>
.main_container{
width:100%;
height:50%;
background: url('images/location2.jpg');
color:#eee;
font-size:50px;
text-align:center;
display:flex;
background-size:cover;

}

.locations div{
    padding:12px;
    display:inline-block;
    background-color:#eee;
    width:30%;
    height:180px;
    margin-left:8px;
    margin-top:20px;
    margin-bottom:5%;
    color:rgb(87, 87, 160);
    font-size:30px;
    vertical-align:top;
    
}
.locations div:hover{
    box-shadow: 0 10px 10px 0 #e8e8ee, 0 3px 8px 0 #e8e8ee; 
    cursor:pointer;
}
@media(max-width: 700px){
    .locations div{
    padding:12px;
    display:block;
    background-color:#eee;
    width:60%;
    height:180px;
    margin-left:80px;
    margin-top:20px;
    margin-bottom:5%;
    color:rgb(87, 87, 160);
    font-size:30px;
    vertical-align:top;
    
}
.locations div:hover{
    box-shadow: 0 10px 10px 0 #e8e8ee, 0 3px 8px 0 #e8e8ee; 
    cursor:pointer;
}
}
</style>
<?php include_once './bottom_design.php';?>