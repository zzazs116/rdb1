<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => "\u0637\u0631\u064a\u0642\u0629 \u0627\u0644\u0637\u0644\u0628 \u063a\u064a\u0631 \u0645\u0633\u0645\u0648\u062d\u0629"
    ], JSON_UNESCAPED_UNICODE);
    exit();
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data) {
    $data = $_POST;
}

$name = isset($data['name']) ? trim($data['name']) : '';
$phone = isset($data['phone']) ? trim($data['phone']) : '';
$service = isset($data['service']) ? trim($data['service']) : '';
$message = isset($data['message']) ? trim($data['message']) : '';

$errors = [];

if (empty($name)) {
    $errors[] = "\u0627\u0644\u0627\u0633\u0645 \u0645\u0637\u0644\u0648\u0628";
}

if (empty($phone)) {
    $errors[] = "\u0631\u0642\u0645 \u0627\u0644\u062c\u0648\u0627\u0644 \u0645\u0637\u0644\u0648\u0628";
}

if (empty($service)) {
    $errors[] = "\u064a\u0631\u062c\u0649 \u0627\u062e\u062a\u064a\u0627\u0631 \u0627\u0644\u062e\u062f\u0645\u0629";
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode('، ', $errors),
        'errors' => $errors
    ], JSON_UNESCAPED_UNICODE);
    exit();
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$service = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$booking = [
    'id' => uniqid('booking_'),
    'name' => $name,
    'phone' => $phone,
    'service' => $service,
    'message' => $message,
    'date' => date('Y-m-d H:i:s'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
    'status' => 'new'
];

$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

$bookingsFile = $dataDir . '/bookings.json';
$bookings = [];

if (file_exists($bookingsFile)) {
    $existing = file_get_contents($bookingsFile);
    $bookings = json_decode($existing, true) ?: [];
}

$bookings[] = $booking;

$saved = file_put_contents(
    $bookingsFile,
    json_encode($bookings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
    LOCK_EX
);

if ($saved === false) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => "\u062d\u062f\u062b \u062e\u0637\u0623 \u0641\u064a \u062d\u0641\u0638 \u0627\u0644\u062d\u062c\u0632\u060c \u064a\u0631\u062c\u0649 \u0627\u0644\u0645\u062d\u0627\u0648\u0644\u0629 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649"
    ], JSON_UNESCAPED_UNICODE);
    exit();
}

http_response_code(200);
echo json_encode([
    'success' => true,
    'message' => "\u062a\u0645 \u062d\u062c\u0632 \u0645\u0648\u0639\u062f\u0643 \u0628\u0646\u062c\u0627\u062d! \u0633\u0646\u062a\u0648\u0627\u0635\u0644 \u0645\u0639\u0643 \u0642\u0631\u064a\u0628\u0627\u064b",
    'booking_id' => $booking['id']
], JSON_UNESCAPED_UNICODE);
