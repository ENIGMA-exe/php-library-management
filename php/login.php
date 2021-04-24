<?php
    session_start();
    
    include 'config.php';

    $user_id = @$_POST['user_id'];
    $pass = @$_POST['pass'];

    $TableName = "credential";

    $query = "select * from credential";
    $results = mysqli_query($con,$query);

    

    foreach($results as $row){

        // echo $row['userID'];
        // echo $row['pass']."<br>";

        if($row['userID'] == $user_id){
            if($row['pass'] == $pass){

                $_SESSION['user_name'] = $row['name'];
                echo './html/index2.php';
            }
        }
    }

?>