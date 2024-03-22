<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $con=mysqli_connect("localhost","root","","task");
    if($con->connect_error){
        exit("Connection failed ".$connect_error);
    }
    if(!isset($username,$password)){
        exit("Empty fields");   
    }
    
    if (strlen($password)<=8) {
        echo json_encode(array('success' => false, 'message' => 'Passwords have less than 8 characters.'));
        exit();
    }
    if(empty($username)||empty($password)){
        exit("Empty values");
    }
    if ($stmt = $con->prepare("SELECT * FROM user_details WHERE user_name=?")) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($res->num_rows > 0) {
            $data = $res->fetch_assoc();
            $hashedPasswordFromDB = $data['cpass'];
    
            if ($password===$hashedPasswordFromDB) {
                echo "LOGGED IN SUCCESSFULLY";
            } else {
                echo "INVALID PASSWORD";
            }
        } else {
            echo "PLEASE REGISTER";
        }
        $stmt->close();
    } else {
        echo "ERROR OCCURRED";
    }  
    $con->close();
?>                                                                                                       