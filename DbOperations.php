<?php
require 'DatabaseConnection.php';

class DbOperations{
    private $dbConnection;
    public function __construct() {
        $this->dbConnection = new DatabaseConnection();
    }
    public function isEmailRegistered($email) {
        $conn = $this->dbConnection->getConnection();
        $sql = "SELECT * FROM Users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        return mysqli_num_rows($result) > 0;
    }
    // Function to insert user data and address data into database
	public function insertUserData($firstname, $lastname, $mobilenumber, $email, $password) {
    $conn = $this->dbConnection->getConnection();
    // Insert user data into your_table_name and link it to the address
    $user_sql = "INSERT INTO Users (firstname, lastname, mobilenumber, email, password)
	            VALUES ('$firstname', '$lastname', '$mobilenumber', '$email', '$password')";
				
		if ($conn->query($user_sql) === TRUE) {
            return true;
        } else {
            return "Error inserting user data: " . $conn->error;
        }
	}
	
	public function loginUser($email, $password){
    $conn = $this->dbConnection->getConnection();
    $sql = "SELECT * FROM Users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false; 
    }
	}
}