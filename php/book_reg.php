<?php 
    include 'config.php';

    $book_name = @$_POST['book_name'];
    $book_img = @$_POST['book_img'];
    $book_url = @$_POST['book_url'];
    $section = @$_POST['section'];

    


    if($book_name !="" and $book_url !=""){
        switch($section){
            case "Computer-science-and-engg.":
                $insertquery = "insert into computer_science(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            case "mathematics":
                $insertquery = "insert into mathematics(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            case "electrical-and-Electronics":
                $insertquery = "insert into electrical_and_electronics(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            case "business-and-economics":
                $insertquery = "insert into business_and_economics(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            case "literature":
                $insertquery = "insert into literature(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            case "politics-and-current-event":
                $insertquery = "insert into politics_and_current_event(book_name,img_url,book_url) values('$book_name','$book_img','$book_url')";
                $pass = mysqli_query($con,$insertquery);
                echo '<script>alert("inserted successfully")</script>';
                break;

            default:
                echo '<script>alert("error in insertion...")</script>';
        };
    }else{
         echo '<script>alert("null data..")</script>';
    };
?>