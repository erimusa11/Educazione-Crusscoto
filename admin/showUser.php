<?php
include "../functions.php";
global $connection;
$id = $_GET['id'];
$data = array();

$query = "SELECT * FROM users WHERE user_id = '$id'";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['user_id'];
    $name = utf8_encode($row['user_name']);
    $lastname = utf8_encode($row['user_surname']);
    $username = utf8_encode($row['user_username']);
    $password = utf8_encode($row['user_password']);
    $email = utf8_encode($row['user_email']);
    $phone = utf8_encode($row['user_phone']);
    $citta = utf8_encode($row['user_city']);
    $provincia = utf8_encode($row['user_province']);
    $regione = utf8_encode($row['user_district']);
    $data[] = array(
        'id' => $id,
        'name' => $name,
        'lastname' => $lastname,
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'phone' => $phone,
        'citta' => $citta,
        'provincia' => $provincia,
        'regione' => $regione,
    );
}
echo json_encode($data);