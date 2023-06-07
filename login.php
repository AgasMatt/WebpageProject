<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
  <head>
    <style>
      body{
        margin-top: 20vh;
        margin-left: 15vw;
        
        background-repeat: no-repeat;
      }
      
      .main{
        background: white;
        border-radius: 3vh;
        height: 50vh;
        width: 70vw;
      }
      
      .container{
        background-image: url("img/wave.png");
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
          <h3>LOGIN</h3>
          
    <form id="loginform" action="login2.php" method="post">
      <div class="input-box">
        <input type="text" name="name" id="username" placeholder="USERNAME" required>
        <label for="username">Username</label>
      </div>  
      <div class="input-box">
        <input type="password" name="pass" id="password" placeholder="PASSWORD" required>
        <label for="password">Password</label>
      </div>
      <div class="input-box">
        <input type="password" name="confirm" id="password" placeholder="CONFIRM PASSWORD" required>
        <label for="conf">Confirm Password</label>
      </div>
      </center>  
      <center>
        <input type="submit" class="btn">
      </center>
    </form>
        </div>
      </div>
    </div>
  </body>
</html>
