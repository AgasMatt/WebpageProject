<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
  <head>
    <style>
      form{
        display: flex;
        flex-direction: columnn;
      }
      
      .input-field{
        height: 10vh;
        border: none;
        position: relative;
      }
      
      input{
        font-size: 15px;
        padding: 10px;
        border: none;
        border-radius: 1vh;
        background-color: #f2f2f2;
        color: #333;
      }
      
      input:focus{
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0.1);
      }
      
      label{
        font-size: 20px;
        padding: 10px;
        border: none;
        border-radius: 1vh;
        background-color: #f2f2f2;
        color: #333;      
        position: relative;
        top: 0;
        left: -210px;
        transition: all 0.3s ease-out;
        pointer-events: none;
      }
      
      input:focus + label, input:not(:placeholder-shown) + label{
        top: -27px;
        font-size: 10px;
        color: #999;
      }
    </style>
  </head>
  <body>
    <form action="checkaccount.php" method="post">
      <div class="input-field">
        
        <input type="text" name="name" placeholder="NAME" required>
        <label for="name">Name</label><br><br><br>
        
        <input type="text" name="username" placeholder="USERNAME" required>
        <label for="username">Username</label><br><br><br>
                 
        <input type="email" name="email" placeholder="EMAIL" required>
        <label for="email">Email</label><br><br><br>
        
        <input type="password" name="pass" placeholder="PASSWORD" required>
        <label for="password">Password</label><br><br><br>
       
        <input type="password" name="confirm" placeholder="CONFIRM PASSWORD" required>
        <label for="confirm">Confirm password</label><br><br><br>
       
        <input type="text" name="secq" placeholder="QUESTION" required>
        <label for="secq">Security Question</label><br><br><br>
       
        <input type="text" name="answer" placeholder="ANSWER" required>
        <label for="answer">Answer to the Question</label><br><br><br>
      </div>
      <input type="submit">
    </form>
  </body>
</html>
  
   