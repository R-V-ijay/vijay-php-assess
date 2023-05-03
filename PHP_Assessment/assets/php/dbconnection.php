
<?php

$connect = mysqli_connect('192.168.7.11', 'vijay_febtrdev_user', '1jxLAS9LmVLAcysS', 'vijay_febtrdev_db', '42209');
if (!$connect) {
    die('Not Connected : ' . mysqli_connect_error($connect));
}



?>