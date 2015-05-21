<?php
    //Check if username and password fields are not blank then save it
    if(isset($_POST["username"]) 
        && isset($_POST["password"]) 
        && $_POST["username"] != "" 
        && $_POST["password"] != "") {

        $sql = "INSERT INTO user (username, password) VALUES ('".$_POST["username"]."', '".$_POST["password"]."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>