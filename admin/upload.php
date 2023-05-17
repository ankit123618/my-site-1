<?php

// including db config file
require_once("../db/config.php");
// echo $_POST;
$data = file_get_contents("php://input");
echo $data;
// $title = $_POST['title'];
// $subtitle = $_POST['subtitle'];
// $description = $_POST['description'];
// $cover = $_FILES['cover'];

// Process and use the form data as needed
// For demonstration purposes, let's echo the form data
// echo "Title: " . $title . "\n";
// echo "Subtitle: " . $subtitle . "\n";
// echo "Description: " . $description . "\n";
// echo "Cover Filename: " . $cover['name'] . "\n";

// // image properties storing in variables
// $name = $_FILES['cover']['name'];
// $tmpname = $_FILES['cover']['tmp_name'];
// $type = $_FILES['cover']['type'];
// $size = $_FILES['cover']['size'];
// $error = $_FILES['cover']['error'];

// echo $name;
// // storing other form values - book details
// $title = $_POST['title'];
// $subtitle = $_POST['subtitle'];
// $description = $_POST['description'];

// echo $title;
// // storing images from input to server
// move_uploaded_file($tmpname,"../pictures/book-covers/".$name);

// $insert_book_data = "insert into books(title,subtitle,description,picture)values('$title','$subtitle','$description','$name')";
// $status = mysqli_query($connection,$insert_book_data);
// if($status)
//     echo "1";
// else
//     echo "0";
