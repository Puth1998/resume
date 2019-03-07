<?php
$dbc = mysqli_connect("127.0.0.1", "root", "", "resume");
$dbc -> set_charset("utf8");
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$area = $_POST["area"];

$sql = "INSERT INTO contact (contact_name, contact_mail, contact_phone , contact_area)
VALUES ('$name', '$mail', '$phone', '$area')";


if ($dbc->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .$dbc->error;
}

$dbc->close();


?>