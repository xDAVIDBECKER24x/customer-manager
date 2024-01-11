<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['message'])) {
    echo json_encode(['status' => 'success', 'message' => 'Message received: ' . $data['message']]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No message received']);
}

$clients_data = json_decode(file_get_contents('../src/data/clients.json'), true);

$client = json_decode($data['message'], true);

array_push($clients_data['data'], $client);

$string_data = json_encode($clients_data);

file_put_contents('../src/data/clients.json', $string_data);

?>