<?php
include 'firebase.php';

$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

$user = [
    "email" => $email,
    "password" => $password
];

file_get_contents(firebase("users/" . md5($email)) . "?method=PUT", false, stream_context_create([
    'http' => [
        'method'  => 'PUT',
        'header'  => "Content-Type: application/json",
        'content' => json_encode($user)
    ]
]));

echo json_encode(["success" => true]);
