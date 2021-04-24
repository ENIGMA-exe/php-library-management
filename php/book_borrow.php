<?php 

    include 'config.php';

    $name = @$_POST['name'];
    $ID = @$_POST['ID'];
    $contact_no = @$_POST['contact_no'];
    $book_1 = @$_POST['book_1'];
    $book_2 = @$_POST['book_2'];
    $book_3 = @$_POST['book_3'];
    $TableName = "Bookborrow";


    $query = "select id from $TableName";
    $num = 0; //non dupicate
    $pass = mysqli_query($con,$query);

    $ID_list = [];
    
    foreach($pass as $row){
        array_push($ID_list,$row['id']);
    };
    foreach($ID_list as $item){
        if($item == $ID){
            $num = 1; //duplicate
            break;
        };
    };
        

    if($num == 0){
        $InsertQuery = "insert into $TableName values('$ID','$name','$contact_no','$book_1','$book_2','$book_3')";
        $pass = mysqli_query($con,$InsertQuery);
        if($pass){
            echo "<script>alert('inserted successfully');</script>";
        }else{
             echo "<script>alert('inserted successfully');</script>" ;  
        }
    }else{
        $space_1;
        $space_2;
        $space_3;
        $FetchingQuery_1 = "select * from $TableName where id='$ID'";
        $pass = mysqli_query($con,$FetchingQuery_1);
        foreach($pass as $row){
            $space_1 = $row['book1'];
            $space_2 = $row['book2'];
            $space_3 = $row['book3'];
        }
        // echo $space_1." ";
        // echo $space_2." ";
        // echo $space_3." ";
        // echo $book_1." ";
        // echo $book_2." ";
        // echo $book_3." ";
        
        if($space_1 == "none" or $space_2 == "none" or $space_3 == "none"){

            $FetchingQuery_2 = "select * from $TableName where id = '$ID'";
            $pass = mysqli_query($con,$FetchingQuery_2);
            foreach($pass as $row){
                if($space_1 == "none" & $book_1 != "none"){
                    $UpdateQuery= "update Bookborrow set book1='$book_1' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery);
                    if($pass_1){
                        echo "<script>alert('updated successfully')</script>" ;
                    }else{
                        echo "<script>alert('updated error...!!')</script>" ;
                    }
                };
                if($space_2 == "none" & $book_2 != "none"){
                    $UpdateQuery= "update Bookborrow set book2 ='$book_2' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery) or trigger_error(mysqli_error($con), E_USER_ERROR);
                    if($pass_1){
                        echo "<script>alert('updated successfully')</script>";
                    }else{
                        echo "<script>alert('updated error...!!')</script>" ;
                    }
                };
                if($row['book3'] == "none" & $book_3 != "none"){
                    $UpdateQuery= "update Bookborrow set book3 = '$book_3' where id='$ID'";
                    $pass_1 = mysqli_query($con,$UpdateQuery);
                    if($pass_1){
                        echo "<script>alert('updated successfully')</script>";
                    }else{
                        echo "<script>alert('updated error...!!')</script>" ;
                    }
                };
            };
        }else{
            echo "<script> alert('borrow crieteria is overed...!!') </script>";
        };
       
    };

?>