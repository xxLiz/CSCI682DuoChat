<?php
require 'DbOperations.php';
require 'validations.php';
class ProcessRegistration{
    private $dboperations;
    public function __construct(Dboperations $dboperations) {
        $this->dboperations =$dboperations;
    }
    public function registerUser() {
        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobilenumber']) && isset($_POST['email']) && isset($_POST['password'])) {
    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $mobilenumber = validate($_POST['mobilenumber']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    
    // Hashing the password
    $password = md5($password);
    
    if ($this->dboperations->isEmailRegistered($email)) {
        $_SESSION['error-message'] = "The email is already registered. Please try another one";
        header("Location: register.php");
        //exit();
    } else {
        $result2 = $this->dboperations->insertUserData($firstname, $lastname, $mobilenumber, $email, $password);
        if ($result2) {
            $_SESSION['success-message'] = "Account created successfully";
            header("Location: login.php");
            // exit();
        } else {
            $_SESSION['error-message'] = "Error: Insert query is not executed";
            header("Location: register.php");
            // exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
}
}
