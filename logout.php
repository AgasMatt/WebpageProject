<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
  <head>
    <title>SPRCNHS - Log Out</title>
    <style>
      body{
        margin-top: 20vh;
        margin-left: 15vw;
        background-image: url("img/wave.png");
        background-repeat: no-repeat;
      }
      
      .main{
       
        border-radius: 3vh;
        height: 50vh;
        width: 70vw;
      }
      
      .container{     
        margin: 0 auto;
        height: 50vh;
        width: 70vw;
        border: none;
        border-radius: 3vh;
        box-shadow: 0 0 10px rgba(0, 0, 0, 1);
      }
      
      .head{
        width: 70vw;
        height: 6vh;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        transform: uppercase;
        border-radius: 2vh;
      }
      
      h1{
        padding-top: 1p,pokvh;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <div class="container">
        <div class="head">
          <center>
            <h1>SAN PEDRO RELOCATION CENTER NATIONAL HIGH SCHOOL MAIN-CAMPUS</h1>
          </center>
          <center>
          <h3>LOGOUT</h3>
          
		<div align="center">Are you sure you want to log out?</div>
		<?php echo "<a href=\"dashboard.php\">Yes</a>"; echo "<a href=\"dashboard.php?account=".$_GET["account"]."\">No</a>"; ?>
		
        </div>
      </div>
    </div>
  </body>
</html>