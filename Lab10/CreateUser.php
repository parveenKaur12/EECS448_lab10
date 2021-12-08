<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "p695k530", "Po9phuom", "p695k530");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
      exit(); 
    }
    $userAns1 = $_POST['username'];
    
    if($userAns1 == "")
    {
        echo"Name was not added to database!";

    }
    else
    {
        $query = "INSERT INTO Users(user_id) VALUES('$userAns1')";

    }

    if($result = $mysqli->query($query))
    {   
        echo"Name was added to database!";

    }
    else{
        echo"Name already exists in database";
    }

    $result->free();
    /* close connection */ 
    $mysqli->close(); 
?>