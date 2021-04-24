<?php 

    include 'config.php';

    $name = @$_POST['name'];
    $ID = @$_POST['ID'];
    $book_1 = @$_POST['book_1'];
    $book_2 = @$_POST['book_2'];
    $book_3 = @$_POST['book_3'];
    $TableName = "Bookborrow";

    $book_names = array($book_1,$book_2,$book_3);


    $query = "select id from $TableName";
    $num = 0; //id not present
    $pass = mysqli_query($con,$query);

    $ID_list = [];
    
    foreach($pass as $row){
        array_push($ID_list,$row['id']);
    };
    foreach($ID_list as $item){
        if($item == $ID){
            $num = 1; // id present
            break;
        };
    };

    $deletion = 0;

    if($num == 1){
        $query = "select * from $TableName";
        $pass = mysqli_query($con,$query);

        foreach($pass as $row){
            //for book1
            foreach($book_names as $item){
                if($row['book1'] != "none" and $row['book1'] == $item){
                    $UpdateQuery = "update $TableName set book1 = 'none' where id = '$ID'";
                    $result = mysqli_query($con,$UpdateQuery);
                    $deletion = $deletion+1;
                }
            };

            //for book2
            foreach($book_names as $item){
                if($row['book2'] != "none" and $row['book2'] == $item){
                    $UpdateQuery = "update $TableName set book2 = 'none' where id = '$ID'";
                    $result = mysqli_query($con,$UpdateQuery);
                    $deletion = $deletion+1;
                }
            };

            //for book1
            foreach($book_names as $item){
                if($row['book3'] != "none" and $row['book2'] == $item){
                    $UpdateQuery = "update $TableName set book3 = 'none' where id = '$ID'";
                    $result = mysqli_query($con,$UpdateQuery);
                    $deletion = $deletion+1;
                }
            };
        }

        if($deletion > 0){
            echo "Returned Successfully...";
        }else{
            echo "book id is not matching...";
        }
    }else{
        echo "ID not registered yet..";
    }
?>