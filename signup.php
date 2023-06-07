<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
  <head>
  </head>
  <body>
    <form action="checkaccount.php" method="post">
      <table>
        <tr><td>Name</td><td><input type="text" name="name" required></td></tr>
        <tr><td>Username</td><td><input type="text" name="username" required></td></tr>
        <tr><td>Email</td><td><input type="email" name="mail" required></td></tr>
        <tr><td>Password</td><td><input type="password" name="pass" required></td></tr>
        <tr><td>Confirm password</td><td><input type="password" name="confirm" required></td></tr>
        <tr><td>Security Question:</td><td><input type="text" name="secq" required></td></tr>
        <tr><td>Answer to the Sec Ques.</td><td><input type="text" name="answer" required></td></tr>
      </table>
      <input type="submit">
    </form>
  
   