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
        <tr><td>Answer to the Sec Ques.</td><td><input type="text" name="ans" required></td></tr>
      </table>
      <input type="submit">
    </form>
  </body>
</html>DOCTYPE html>
<html>
<head>
    <title>check account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E8F2E9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #006400;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #CCCCCC;
        }
        .form-group input[type="submit"] {
            background-color: #006400;
            color: #FFFFFF;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #F0FFF0;
        }
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>check account</h2>
        <form method="post" action="checkaccount.php">
            <div class="form-group">
                <label for="account_number">Account Number:</label>
                <input type="text" id="account_number" name="account_number" required>