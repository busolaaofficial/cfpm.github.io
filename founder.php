<?php include_once './top_design.php';?>
<div class="main">
<div class="founder">
<img src="images/mummy.jpg"/>
</div>
<div class="text">
<div>
Integrity Family is a place to build and develop right values needed for maximum impact and enlargement of capacity! A place of Love and filled with challenges for one to become a better person!
I'm super glad I never turn down the privilege to be a member of this sweet family.
</div>
</div>
</div>

<style>
.main{
    width:100%;
}
.founder{
    width:40%;
    margin-left:60px!important;

    }
.founder img{
    width:400px;
    height:400px;
    border-radius:50%!important;
}
.text{
    width:40%;
    font-family:'Hind', sans-serif;;
    margin-left:20px!important;
    padding-bottom:200px!important;
    margin-top:6%!important;
    
}
.text div{
    padding:12px;
    line-height:40px;
}

.text,  .founder{
    display:inline-block!important;
    vertical-align:top;
    margin-top:3%;
    margin-bottom:2%;
}

@media(max-width: 700px){
    .founder img{
    width:200px;
    height:400px;
    border-radius:50%!important;
}
}
</style>
<?php include_once './bottom_design.php';?>