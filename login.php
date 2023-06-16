<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
  <head>
    <style>
  
   .picture{

    width: 103.5vw;
    height: 73.2vh;
    background-repeat: no-repeat;
    position: absolute;
    top: 25.7vh;
    left: -3vw;
    margin-top: -1vh;
    margin-left: -1vh;
    }
      
      .up{
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
         width: 100.1vw;
        height: 25vh;
        margin-top: -1vh;
        margin-left: -1vh;
        }
        
       
      .logo{
        position: absolute;
        left: 1.1vw;
        top:5vh;
        height: 14vh;
        width: 9vw;
      
      }
      .logo2{
        position: absolute;
        right: 1.3vw;
        top:5vh;
        height: 14vh;
        width: 9vw;
      }
  
      
      .container{
       position: absolute;
       top: 35vh;
       left: 33vw;
       margin: 0 auto;
       height: 50vh;
        width: 30vw;
        border: none;
        border-radius: 3vh;
        box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        background-color: white;
        opacity: 0.5;
      }
      
      .head{
        position: absolute;
        left: 37vw;
        top: 30vh;
        width: 20vw;
        height: 10vh;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        color:white;      
        border-radius: 4vh;
      }
      
     
      
      .username{
        position: absolute;
        left: 40vw;
        top: 2vh;
        width: 20vw;
        height: 10vh;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        color:white;      
        border-radius: 4vh;
        border: none;
        text-align: center;
      }
      
      
      .pass{
        position: absolute;
        left: 40vw;
        top: 20vh;
        width: 20vw;
        height: 10vh;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        color:white;      
        border-radius: 4vh;
        border: none;
        text-align: center;
        
      }
      
      .password{
        position: absolute;
        left: 40vw;
        top: 40vh;
        width: 20vw;
        height: 10vh;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        color:white;      
        border-radius: 4vh;
        border: none;
        text-align: center;
        
        
      }
      
  
      .btn {
          background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
          color:white;
      }
      h1{
      position: absolute;
      top: -2vh;
      left:9.5vw;
      font-size: 75px;
      width: 80vw;
      text-align: center;
       
      }
    
  </style>
  </head>
  <body>
    <div class="up">
      <img src="img/logo.png" class="logo">
      <img src="img/deped.jpg" class="logo2">
      <img src="img/bg.webp" class="picture">
    <h1 >SAN PEDRO RELOCATION CENTER NATIONAL HIGH SCHOOL MAIN-CAMPUS</h1>
     </div>
    
     
  
       
           
        <form id="loginform" action="login2.php" method="post">
       
   
        <div class="username">
        <input type="text" name="name" id="username" placeholder="USERNAME" required>
        </div>
          
        <div class="pass">
        <input type="password" name="pass" id="password" placeholder="PASSWORD" required>
        </div>
     
        <div class="password">
        <input type="password" name="confirm" id="password" placeholder="CONFIRM PASSWORD" required>
        </div>
     
    
        <input type="submit" class="btn"  >
   
    </form>
      
 
   
  </body>
</html>