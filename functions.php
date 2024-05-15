<?php  
// Function to add a user to the database
function addUser($conn, $username, $password) {
	$sql = "SELECT * FROM registered WHERE username=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username]);
    // Check if the username already exists
	if($stmt->rowCount()==0) {
		$sql = "INSERT INTO registered (username,password) VALUES (?,?)";
		$stmt = $conn->prepare($sql);
		return $stmt->execute([$username, $password]);
	}
}

function login($conn, $username, $password) {
	$query = "SELECT * FROM registered WHERE username=?";
	$stmt = $conn->prepare($query);
	$stmt->execute([$username]);

	if($stmt->rowCount() == 1) {
		$row = $stmt->fetch();

		// store user info as a session variable
		$_SESSION['userInfo'] = $row;

		// get values from the session variable
		$uid = $row['user_id'];
		$uname = $row['username'];
		$passHash = $row['password'];

		// validate password 
		if(password_verify($password, $passHash)) {
			$_SESSION['user_id'] = $uid;
			$_SESSION['username'] = $uname;
			$_SESSION['email'] = $email;
			$_SESSION['userLoginStatus'] = 1;
			return true;
		}
		else {
			return false;
		}
	}
}

?>
