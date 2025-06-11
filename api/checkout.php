<?php
header('Content-Type: application/json');

$serverKey = 'YOUR_SERVER_KEY';
$clientKey = 'YOUR_CLIENT_KEY';

$orderId = uniqid();
$amount = $_POST['amount'] ?? '10000';
$name = $_POST['name'] ?? 'Customer';

// Request to Midtrans Snap
$data = [
  'transaction_details' => [
    'order_id' => $orderId,
    'gross_amount' => (int)$amount,
  ],
  'customer_details' => [
    'first_name' => $name,
    'email' => 'customer@example.com',
  ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://app.sandbox.midtrans.com/snap/v1/transactions");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Content-Type: application/json",
  "Accept: application/json",
  "Authorization: Basic " . base64_encode($serverKey . ':')
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
