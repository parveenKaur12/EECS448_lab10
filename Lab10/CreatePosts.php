<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "p695k530", "Po9phuom", "p695k530");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
      exit(); 
    }
    $userAns1 = $_POST['username'];
    $userAns2 = $_POST['userText'];

    if($userAns1 == "")
    {
        echo"Please input a username.\n";

    }
    
    if($userAns2 == "")
    {
        //echo"Post was not added to database!";
    }
    else
    {
        $query = "INSERT INTO Posts(content, author_id) VALUES('$userAns2', '$userAns1')";

    }
    if($result = $mysqli->query($query))
    {   
        echo"Post was added to database!";
    }
    else{
        echo"Post was not added to database";
    }


    $result->free();
    /* close connection */ 
    $mysqli->close(); 
?>