<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = new mysqli("localhost", "root", "", "bmwdb");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO `datauserstobuy` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$name', '$email', '$phone', '$message')";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>