<?php
    /*$firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];

    // Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $dateOfBirth, $address, $contactNumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful!";
		$stmt->close();
		$conn->close();
	}
	//<?php*/
	//<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactNumber = $_POST['contactNumber'];

    // Database connection
	$conn = new mysqli('localhost','root','','hospital');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into patientregistration(firstName, lastName, dob, gender, email, password, contactNumber) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $firstName, $lastName, $dob, $gender, $email, $password, $contactNumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful!";
		$stmt->close();
		$conn->close();
	}
?>
	
    



