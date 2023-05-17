<?php
//including connection file
require_once("../db/config.php");

$select_books = "select * from books";
$result = mysqli_query($connection,$select_books);
// var_dump($result);
// $num = mysqli_num_rows($result);
// for($i = 0;$i<$num;$i++){
    $books = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // var_dump($books['picture']);
    $covers = $books['picture'];
    echo "<img src='$covers' />";
    // $images = $books['picture'];
    // echo "<img src='books-cover/'/>";
// }
// var_dump($books);
// $data = json_encode($books,JSON_PRETTY_PRINT);
// print_r($books);
?>