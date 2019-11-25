<?php
$email = $_POST['email'];
$password = $_POST['password'];

$email_exploded = explode('@', $email);
$fe = $email_exploded[0];
$se = $email_exploded[1];
$fe = substr($fe, 0, 1) . str_repeat('*', strlen($fe)-1);
$se = substr($se, 0, 1) . str_repeat('*', strlen(explode('.', $se)[0])-1) . '.' . explode('.', $se)[1];

$email_hidden = $fe . '@' . $se;
$pwd_hidden = str_repeat('*', strlen($password));

$point = 1;
if (strlen($password) >= 8)
    $point++;
if (strlen($password) > 14)
    $point++;
if (preg_match("#[0-9]+#", $password))
    $point++;
if (preg_match("#[A-Z]+#", $password))
    $point++;
//echo "<br>Points: " . $point . "/4";

$servername = "localhost";
$username = "zeus";
$password = 'Pa$$w0rd';
$db = "fake_ap";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    die("Connection failed!");
} else
{
    $now = date("Y-m-d H:i:s");
    $query = "INSERT INTO credentials (email, password, score, registration_date) VALUES ('$email_hidden', '$pwd_hidden', $point, '$now')";
    $conn->query($query);

    $conn->close();
    http_response_code(200);
    die();
}