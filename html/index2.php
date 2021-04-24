<?php
    session_start();

    if(!isset($_SESSION['user_name'])){
        header('location: ../index.html');
    }
    
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>belly de library</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href='../css/style2.css'>
</head>

<body>

    <nav>
        <div class="logo"><img src="../img/IIIT-Bhubaneswar.jpg" alt=""></div>
        <div class="lo-head">IIIT-Bhubaneswar</div>

        <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Contact Us</li>
        </ul>

        <input id="search" type="text" placeholder="search">
        <button class="search">Search</button>
    </nav>

    <div class="oporation">
        <div class="opo-head">Belly de Biblioteca</div>
        <ul>
            <li onmouseover="hoverin()" onmouseout="hoverout()">Section</li>
            <li onclick="modal_1()">Book Reg.</li>
            <li onclick="modal_2()">Book Borrow</li>
            <li onclick="modal_3()">Book Return</li>
            <li onclick="modal4()">Status</li>
            <li onclick="logOut()">Log Out</li>
        </ul>
    </div>

    <div class="sub-list" onmouseover="hoverin()" onmouseout="hoverout()">
        <ul>
            <li>Computer science & engg.</li>
            <li>Mathematics</li>
            <li>Electrical & Electronics</li>
            <li>business & economics</li>
            <li>literature</li>
            <li>politics and current event</li>
        </ul>
    </div>
    <!-- .....................modal box.................................................... -->

    <!-- .........................book reg. - modal box......................................... -->

    <div class="modal-1">
        <div class="modal-1-content">
            <div class="modal-1-heading">Book Registration <span onclick="cross_1()">&#x2716;</span>
            </div>
            <input type="text" id="bkreg-1" placeholder="name">
            <input type="text" id="bkreg-2" placeholder="url">
            <input type="text" id="bkreg-3" placeholder="image path">

            <label for="section">Section</label>
            <select name="book-secton" id="book-section" aria-placeholder="section">
                <option value="Computer-science-and-engg.">Computer science & engg.</option>
                <option value="mathematics">Mathematics</option>
                <option value="electrical-and-Electronics">Electrical & Electronics</option>
                <option value="business-and-economics">business & economics</option>
                <option value="literature">literature</option>
                <option value="politics-and-current-event">politics and current event</option>
            </select>
            <button class="book-registration" onclick="BookReg()">Registor</button>
        </div>
    </div>

    <!-- ................................book borrow - model box............................... -->

    <div class="modal-2">
        <div class="modal-2-content">
            <div class="modal-2-heading">Book Borrow <span onclick="cross_2()">&#x2716;</span>
            </div>

            <div class="info">
                <div class="stu-details">
                    <input type="text" id="bkbo-1" placeholder="student name">
                    <input type="text" id="bkbo-2" placeholder="college ID">
                    <input type="text" id="bkbo-3" placeholder="contact no.">
                </div>
                <div class="book-details">
                    <input type="text" id="bkbo-4" placeholder="book 1">
                    <input type="text" id="bkbo-5" placeholder="book 2">
                    <input type="text" id="bkbo-6" placeholder="book 3">
                </div>
            </div>
            <button onclick="BookBorrow()">Borrow</button>
        </div>
    </div>

    <!-- ................................book return- model box............................... -->

    <div class="modal-3">
        <div class="modal-3-content">
            <div class="modal-3-heading">Book Return <span onclick="cross_3()">&#x2716;</span>
            </div>

            <div class="info">
                <div class="stu-details">
                    <input type="text" id="bkre-1" placeholder="student name">
                    <input type="text" id="bkre-2" placeholder="college ID">
                </div>
                <div class="book-details">
                    <input type="text" id="bkre-3" placeholder="book 1 ID">
                    <input type="text" id="bkre-4" placeholder="book 2 ID">
                    <input type="text" id="bkre-5" placeholder="book 3 ID">
                </div>
            </div>
            <button onclick="BookReturn()">Return</button>
        </div>
    </div>

    <!-- ................................status- model box............................... -->

    <div class="modal4">
        <div class="modal4content">
            <div class="modal4heading">Status <span onclick="cross_4()">&#x2716;</span>
            </div>

            <div class="modal4info">
                <div class="stu-details">
                    <input  readonly type="text" id="bksts-1" placeholder="student name">
                    <input type="text" id="bksts-2" placeholder="college ID">
                </div>

                <div class='status-book-details'>

                    <input readonly type='text' id='bksts-3'>
                    <input readonly type='text' id='bksts-4'>
                    <input readonly type="text" id='bksts-5'>

                </div>


            </div>
            <button onclick="Status()">Show Status</button>
        </div>
    </div>

    <!-- ...................computer science.......................................... -->
    <div class="book-sec-heading" id="com-sci">Computer science</div>
    <div class="book-section" id="com-sci">

        <!-- ..............php............... -->
        <?php 

            $username = "root";
            $password= "";
            $server= 'localhost';
            $db = 'iiit-bh-library';

            $con = mysqli_connect($server,$username,$password,$db);

            $query1 = " select * from computer_science";
            $result1 = mysqli_query($con,$query1);

            foreach($result1 as $row){
                echo "<div class='book-sub-sec' id='bss-1'>" ;
                    echo "<div class='book-img' style='background-image:url(".$row['img_url'].");'></div>" ;
                    echo "<div class='book-name'>".$row['Book_name']."</div>";
                    echo "<button class='download' onclick = 'window.open(\"".$row['book_url']."\"); return false;'>GET</button>";
                echo "</div>";
            }      
        ?>

    </div>

    <!-- ...................electrical and electronis.......................................... -->
    <div class="book-sec-heading" id="el-ec">Electrical and Electronics</div>
    <div class="book-section" id="el-ec">
        
        <!-- ................php............ -->
        <?php 

            $query2 = " select * from electrical_and_electronics";
            $result2 = mysqli_query($con,$query2);

            foreach($result2 as $row){
                echo "<div class='book-sub-sec' id='bss-1'>" ;
                    echo "<div class='book-img' style='background-image:url(".$row['img_url'].");'></div>" ;
                    echo "<div class='book-name'>".$row['Book_name']."</div>";
                    echo "<button class='download' onclick = 'window.open(\"".$row['book_url']."\"); return false;'>GET</button>";
                echo "</div>";
            }      

        
        ?>
    </div>

    <!-- ...................Mathematics.......................................... -->
    <div class="book-sec-heading" id="com-sci">Mathematics</div>
    <div class="book-section" id="math">
        
        <!-- <div class="book-sub-sec" id="bss-1">
            <div class="book-img"></div>
            <div class="book-name">business design</div>
            <button class="download">GET</button>
        </div> -->
        <!-- ................php............ -->
        <?php 

            $query3 = " select * from mathematics";
            $result3 = mysqli_query($con,$query3);

            foreach($result3 as $row){
                echo "<div class='book-sub-sec' id='bss-1'>" ;
                    echo "<div class='book-img' style='background-image:url(".$row['img_url'].");'></div>" ;
                    echo "<div class='book-name'>".$row['Book_name']."</div>";
                    echo "<button class='download' onclick = 'window.open(\"".$row['book_url']."\"); return false;'>GET</button>";
                echo "</div>";
            }      
        ?>
    </div>

    <!-- ...................business and economics.......................................... -->
    <div class="book-sec-heading" id="com-sci">Business And Economics</div>
    <div class="book-section" id="buss-eco">
        
        <!-- <div class="book-sub-sec" id="bss-1">
            <div class="book-img"></div>
            <div class="book-name">business design</div>
            <button class="download">GET</button>
        </div> -->
        <!-- ................php............ -->
        <?php 

            $query4 = " select * from business_and_economics";
            $result4 = mysqli_query($con,$query4);

            foreach($result4 as $row){
                echo "<div class='book-sub-sec' id='bss-1'>" ;
                    echo "<div class='book-img' style='background-image:url(".$row['img_url'].");'></div>" ;
                    echo "<div class='book-name'>".$row['Book_name']."</div>";
                    echo "<button class='download' onclick = 'window.open(\"".$row['book_url']."\"); return false;'>GET</button>";
                echo "</div>";
            }      
        ?>
    </div>

    <!-- ..................................Footer..................................... -->

    <footer>
        <ul id="about">
            <li>About us</li>
            <li>Privacy</li>
            <li>Newsletter</li>
            <li>Sitemap</li>
        </ul>

        <div class="sm_site">
            <h5>FOLLOW US ON</h5>
            <ul id="social_site">
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-google-plus"></i></li>
                <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-instagram"></i></li>
            </ul>
            <p> Copyright:ID 2021 .......</p>
        </div>
    </footer>
</body>

<!-- <script src='../js/app.js'></script> -->
<script>

    // ...................Modal opening function.....................................

    function modal_1() {
        var modal_1 = document.getElementsByClassName("modal-1")[0];
        modal_1.style.display = "block";
    };

    function modal_2() {
        var modal_2 = document.getElementsByClassName("modal-2")[0];
        modal_2.style.display = "block";
    };

    function modal_3() {
        var modal_3 = document.getElementsByClassName("modal-3")[0];
        modal_3.style.display = "block";
    };

    function modal4() {
        var modal_4 = document.getElementsByClassName("modal4")[0];
        modal_4.style.display = "block";
    };

    // ...................Modal closing function.....................................
    function cross_1() {
        var input_list = document.getElementsByTagName("input");
        count = 0;
        while (count < input_list.length) {
            input_list[count].value = "";
            count = count + 1;
        }

        var cross_1 = document.getElementsByClassName("modal-1")[0];
        cross_1.style.display = "none";
    };

    function cross_2() {
        var input_list = document.getElementsByTagName("input");
        count = 0;
        while (count < input_list.length) {
            input_list[count].value = "";
            count = count + 1;
        }

        var cross_2 = document.getElementsByClassName("modal-2")[0];
        cross_2.style.display = "none";
    };

    function cross_3() {
        var input_list = document.getElementsByTagName("input");
        count = 0;
        while (count < input_list.length) {
            input_list[count].value = "";
            count = count + 1;
        }

        var cross_3 = document.getElementsByClassName("modal-3")[0];
        cross_3.style.display = "none";
    };

    function cross_4() {
        var input_list = document.getElementsByTagName("input");
        count = 0;
        while (count < input_list.length) {
            input_list[count].value = "";
            count = count + 1;
        }

        var cross_4 = document.getElementsByClassName("modal4")[0];
        cross_4.style.display = "none";
    };

    //..................................Hover function..................................................

    function hoverin() {
        document.getElementsByClassName("sub-list")[0].style.display = 'block'
    };

    function hoverout() {
        document.getElementsByClassName("sub-list")[0].style.display = 'none'
    }

    //...................................OThers...........................................................

    function BookReg() {
        var book_name = document.getElementById("bkreg-1").value;
        var book_url = document.getElementById("bkreg-2").value;
        var book_img = document.getElementById("bkreg-3").value;
        var section = document.getElementById("book-section").value;

        if (book_name != 'undefined' & book_name != " ") {
            if (book_url != 'undefined' & book_url != " ") {

                $.post('../php/book_reg.php', {
                    book_name: book_name,
                    book_url: book_url,
                    book_img: book_img,
                    section: section
                })
            } else {
                alert("undefined url..");
            };
        } else {
            alert("undefined name..");
        };
        var input_list = document.getElementsByTagName("input");
        count = 0;
        while (count < input_list.length) {
            input_list[count].value = "";
            count = count + 1;
        }
    };

    function BookBorrow() {
        var name = document.getElementById("bkbo-1").value;
        var ID = document.getElementById("bkbo-2").value.toLowerCase();
        var contact_no = document.getElementById("bkbo-3").value;
        book_1 = document.getElementById("bkbo-4").value;
        book_2 = document.getElementById("bkbo-5").value;
        book_3 = document.getElementById("bkbo-6").value;

        if (book_1 == "") {
            book_1 = "none";
        };
        if (book_2 == "") {
            book_2 = "none";
        };
        if (book_3 == "") {
            book_3 = "none";
        };

        $.post('../php/book_borrow.php', {
            name: name,
            ID: ID,
            contact_no: contact_no,
            book_1: book_1,
            book_2: book_2,
            book_3: book_3
        })
    };

    function BookReturn() {
        name = document.getElementById("bkre-1").value;
        ID = document.getElementById("bkre-2").value.toLowerCase();
        book_1 = document.getElementById("bkre-3").value;
        book_2 = document.getElementById("bkre-4").value;
        book_3 = document.getElementById("bkre-5").value;

        if (book_1 == "") {
            book_1 = "none";
        };
        if (book_2 == "") {
            book_2 = "none";
        };
        if (book_3 == "") {
            book_3 = "none";
        };

        console.log(book_1);
        console.log(book_2);
        console.log(book_3);

        if (book_1 == "none" && book_2 == "none" && book_3 == "none") {
            alert("please enter atleast one book id");
        } else {
            $.post('../php/book_return.php', {
                name: name,
                ID: ID,
                book_1: book_1,
                book_2: book_2,
                book_3: book_3
            }, function (data, status) {
                alert(data);
            });
        }
    };

    function Status() {

        name = document.getElementById("bksts-1").value;
        ID = document.getElementById("bksts-2").value.toLowerCase();

        $.post('../php/status.php', {
            name:name,
            ID:ID
        }, function (data) {
            
            var jdata = JSON.parse(data)

            console.log(jdata);
            
            document.getElementById("bksts-3").setAttribute("value","Book 1 :- "+jdata[0]);
            document.getElementById("bksts-4").setAttribute("value","Book 2 :- "+jdata[1]);
            document.getElementById("bksts-5").setAttribute("value","Book 3 :- "+jdata[2]);
            document.getElementById("bksts-1").setAttribute("value",jdata[3]);

            document.getElementById("bksts-1").style.display = "block";
            document.getElementsByClassName("status-book-details")[0].style.display = "block";
        })
    }

    function logOut(){
        window.location = "../php/logout.php";
    }
</script>

</html>