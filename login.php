<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* CSS Styles */
        body {
            background-color: #ffd5e8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .fields-container {
            width: 300px;
            padding: 20px;
            background-color: #fbeee6;
            border-radius: 10px;
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        /* Remove default input styles */
        input[type="text"],
        input[type="password"] {
            border: none;
            outline: none;
            background: none;
            width: 100%;
            padding: 5px 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-bottom: 1px solid #ccc;
            font-family: Arial, sans-serif;
        }

        /* Style the buttons */
        input[type="submit"] {
            border: none;
            outline: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="fields-container">
        <!-- Login Form -->
        <p>Mysthy Cafe's Membership</p>
        <form action="handleForm.php" method="POST"> 
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <input type="submit" value="Login" id="loginBtn" name="loginBtn">
        </form>
    </div>
    <p><a href="register.php">Register</a></p>
</body>
</html>
