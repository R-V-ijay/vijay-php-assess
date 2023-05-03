<?php
include("./dbconnection.php");
session_start();

extract($_REQUEST);

if (isset($submit) && $submit == "register") {

    $dir = "../img/user_profile";
    $file_name = $_FILES['profile']['name'];
    $tmp_name = $_FILES['profile']['tmp_name'];
    $exlode = explode('.', $file_name);
    $extention = strtolower(end($exlode));
    $new_file_name = $name . '.' . $extention;
    $prifile_path = $dir . '/' . $new_file_name;

    if ($extention == "jpg" || $extention == "png" || $extention == "jpeg") {

        $file_move =  move_uploaded_file($tmp_name, $prifile_path);
        //encrypetd password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(name,email,password,img) VALUES('$name','$email','$hashed_password','$prifile_path')";

        $result = mysqli_query($connect, $query);
        if ($result) {

            echo "hi";
            header("location: ../../assets/php/pages/login_page.php");
        } else {

            header("location: ../../assets/php/pages/login_page.php");

            $_SESSION['loginErr'] = "User Is And Password Is Not Match";
        }
    }
} else if (isset($submit) && $submit == "login") {

    $query = "SELECT * FROM users WHERE name='$name'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_pic'] = $row['img'];

        header("location: ../../index.php");
    } else {
        echo "password not correct";
    }
} else if (isset($submit) && $submit == "addWord") {

    $dir = "../img/word_img";

    $file_name = $_FILES['WordImg']['name'];

    $tmp_name = $_FILES['WordImg']['tmp_name'];

    $exlode = explode('.', $file_name);
    $extention = strtolower(end($exlode));
    $new_file_name = $newWord . '.' . $extention;
    $prifile_path = $dir . '/' . $new_file_name;

    if ($extention == "jpg" || $extention == "png" || $extention == "jpeg") {
        $id = $_SESSION['user_id'];

        $file_move =  move_uploaded_file($tmp_name, $prifile_path);
        //encrypetd password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $new_word = strtolower($newWord);
        $query = "INSERT INTO words(user_id,word,img,status) VALUES('$id','$new_word','$prifile_path','0')";

        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "hi";
            header("location: ../../index.php");
        } else {
            header("location: ../../index.php");
        }
    }
} else if (isset($submit) && $submit == "search") {

    $query = "SELECT * FROM words WHERE word='$searchWord'";
    $result = mysqli_query($connect, $query);
    print_r($result);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['search_word'] = $row['word'];
        $_SESSION['word_img'] = $row['img'];
        $_SESSION['word_id'] = $row['id'];
        header("location: ./pages/word_page.php");
    } else {
        echo "No Words Found" . mysqli_connect_error($row);
    }
} else if (isset($submit) && $submit == "addsyn") {
    echo "<pre>";
    print_r($_FILES['synimg']['name']);
}
