<?php
$raw = file_get_contents('php://input');
$data = json_decode($raw);

file_put_contents('log.txt', $raw . "\n", FILE_APPEND);

// (Tambahkan validasi dan update status order jika diperlukan)
http_response_code(200);
