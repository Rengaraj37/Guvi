<?php
    //pulls the MongoDb driver
    require_once  __DIR__.'/vendor/autoload.php';

    //connect to mongodb
    $databaseConnection = new MongoDB\Client;
    // $databaseConnection= new MongoDB\Client('mongodb://localhost:27017');

    //connecting to specific db
    $myDatabase = $databaseConnection->Mongo;

    //connecting to our mongodb collections
    $mycollection = $myDatabase->users;

    if($mycollection){
        echo "Collection". $mycollection . "Connected";
    }
    else{
        echo "Failed to connect to Database/Collection";
    }

    // if(isset( $_POST['username']) && isset($_POST['password']))
    // {
    //     $username = $_POST['username'];
    //     $password = sha1($_POST['epass']);
    // }

    // $data = array(
    //     "User_Name" => $username,
    //     "Password" => $password
    // );

    // var_dump($data);

    // //insert into mongodb users collections
    // $insert = $userCollection->insertOne($data);

    // if($insert)
    // {
    //     echo "yes";
    // }
    // else{
    //     echo "no";
    // }

?>