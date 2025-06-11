<?php
include 'firebase.php';

$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

$response = file_get_contents(firebase("users/" . md5($email)));
$user = json_decode($response, true);

if ($user && $user['password'] === $password) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
