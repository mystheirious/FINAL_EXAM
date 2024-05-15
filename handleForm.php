<?php  
// Start session to manage user sessions
session_start();
// Include database configuration and functions
require_once('dbConfig.php');
require_once('functions.php');

// Check if registration form is submitted
if (isset($_POST['regBtn'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    
    // Check if input fields are empty
    if(empty($username) || empty($password)) {
        echo '<script> 
        alert("The input field is empty!");
        window.location.href = "register.php";
        </script>';
    }
    else {
        // Add user to the database
        if(addUser($conn, $username, $password)) {
            header('Location: index.php');
        }
        else {
            header('Location: register.php');
        }
    }
}

// Check if login form is submitted
if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check if input fields are empty
    if(empty($username) && empty($password)) {
        echo "<script>
        alert('Input fields are empty!');
        window.location.href='index.php'
        </script>";
    } 
    else {
        // Authenticate user login
        if(login($conn, $username, $password)) {
            header('Location: index.php');
        }
        else {
            header('Location: login.php');
        }
    }
}
?>
