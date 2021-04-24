// ...................Modal opening function.....................................

// function modal_1(){
//     var modal_1 = document.getElementsByClassName("modal-1")[0];
//     modal_1.style.display = "block";
// };

// function modal_2(){
//     var modal_2 = document.getElementsByClassName("modal-2")[0];
//     modal_2.style.display = "block";
// };

// function modal_3(){
//     var modal_3 = document.getElementsByClassName("modal-3")[0];
//     modal_3.style.display = "block";
// };

// function modal4(){
//     var modal_4 = document.getElementsByClassName("modal4")[0];
//     modal_4.style.display = "block";
// };

// ...................Modal closing function.....................................
// function cross_1(){
//     var input_list = document.getElementsByTagName("input");
//     count = 0;
//     while(count < input_list.length){
//         input_list[count].value = "";
//         count = count+1;
//     }

//     var cross_1 = document.getElementsByClassName("modal-1")[0];
//     cross_1.style.display = "none";
// };

// function cross_2(){
//     var input_list = document.getElementsByTagName("input");
//     count = 0;
//     while(count < input_list.length){
//         input_list[count].value = "";
//         count = count+1;
//     }

//     var cross_2 = document.getElementsByClassName("modal-2")[0];
//     cross_2.style.display = "none";
// };

// function cross_3(){
//     var input_list = document.getElementsByTagName("input");
//     count = 0;
//     while(count < input_list.length){
//         input_list[count].value = "";
//         count = count+1;
//     }
    
//     var cross_3 = document.getElementsByClassName("modal-3")[0];
//     cross_3.style.display = "none";
// };

// function cross_4(){
//     var input_list = document.getElementsByTagName("input");
//     count = 0;
//     while(count < input_list.length){
//         input_list[count].value = "";
//         count = count+1;
//     }
    
//     var cross_4 = document.getElementsByClassName("modal4")[0];
//     cross_4.style.display = "none";
// };

// function hoverin(){
//     document.getElementsByClassName("sub-list")[0].style.display = 'block'
// };

// function hoverout(){
//     document.getElementsByClassName("sub-list")[0].style.display = 'none'
// }

//.............................book reg. function..................................

// function BookReg(){
//     var book_name = document.getElementById("bkreg-1").value;
//     var book_url = document.getElementById("bkreg-2").value;
//     var book_img = document.getElementById("bkreg-3").value;
//     var section = document.getElementById("book-section").value;

//     if (book_name != 'undefined') {
//         if (book_url != 'undefined') {

//             console.log(book_name);
//             console.log(book_url);
//             console.log(book_img);
//             console.log(section);

//             $.post('php/book_reg.php', {
//                 book_name: book_name,
//                 book_url: book_url,
//                 book_img: book_img,
//                 section: section
//             })
//         } else {
//             alert("undefined url..");
//         };
//     } else {
//         alert("undefined name..");
//     };
//     var input_list = document.getElementsByTagName("input");
//     count = 0;
//     while (count < input_list.length) {
//         input_list[count].value = "";
//         count = count + 1;
//     }
//};