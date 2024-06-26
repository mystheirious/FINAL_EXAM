<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <style>
    body {
      background-color: #ffd5e8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      width: 360px;
      padding: 20px;
      border: 2px solid #382208; 
      border-radius: 10px;
      background-color: #fbeee6;
    }

    ul {
      border: 1px solid #382208;
      padding: 10px;
      background-color: #fcebf3;
      text-align: center;
      list-style-position: inside;
    }

    a.logoutlink {
    	color: black;
    }

    p:not(:last-child) {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
   <!-- Redirect to another page for the receipt -->
  <form action="checkout.php" method="GET">

   <!-- Welcome message -->
  	<h1 style="text-align: center;">Welcome to Mysthy Cafe, <?php echo $_SESSION['username'];?>!</h1>
  	<h2 style="text-align: center;">Here's the menu :)</h2>

    <!-- Input field -->
    <ul>
      <li>Espresso - 120 PHP</li>
      <li>Macchiato - 130 PHP</li>
      <li>Americano - 130 PHP</li>
      <li>Cappuccino - 140 PHP</li>
      <li>Mocha - 150 PHP</li>
    </ul>
    <p>
      <label for="order">What would you like to order? </label>
      <select name="order" id="order">
        <option value="Espresso">Espresso</option>
        <option value="Macchiato">Macchiato</option>
        <option value="Americano">Americano</option>
        <option value="Cappuccino">Cappuccino</option>
        <option value="Mocha">Mocha</option>
      </select>
    </p>
    <p><label for="q">Quantity: </label><input type="text" name="q" placeholder="How many order?"></p>
    <p><label for="c">Cash: </label><input type="text" name="c" placeholder="Amount of your money"></p>

    <!-- Submit and logout button -->
    <p><input type="submit" value="Submit"></p>
    <a href="logout.php" class="logoutlink">Logout</a>

  </form>
</body>
</html>
