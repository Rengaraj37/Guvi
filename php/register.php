<?php
    require_once __DIR__.'/vendor/autoload.php';
        include ("database.php");


        $username = $_POST["username"];
        $email = $_POST["email"];
        $epass = $_POST["epass"];
        $cpass = $_POST["cpass"];

        $con = mysqli_connect("localhost", "root", "", "task");
        if($con->connect_error){
            exit("Connection error");
        }

        
        if($con->connect_error){
        exit('Failed to connect to the database');
        }    
        if(!isset($username,$email,$epass,$cpass)){
        exit('Empty fields');
        }
        if(empty($username)||empty($email)||empty($epass)||empty($cpass)){
        exit('Empty Values');
        } 
    
        if($stmt = $con->prepare("SELECT * FROM user_details WHERE email=?")){
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result=$stmt->get_result();
            if($result->num_rows>0){
                echo "USER ALREADY EXISTS";
            }
            else{
                $stmt=$con->prepare("INSERT INTO user_details (user_name, email, epass, cpass) VALUES (?,?,?,?)");
                $stmt->bind_param("ssss",$username,$email,$epass,$cpass);
                if($stmt->execute()){
                    $userdetails=array(
                        "User_name"=>$username,
                        "Email"=>$email,
                        "CPass"=>$cpass,
                        "EPass"=>$epass
                    );
                    $mycollection->insertOne($userdetails);
                    echo "REGISTERED SUCCESSFULLY";
                }
            }
        }
        else
        {
            echo "ERROR OCCURED";
        }
?>