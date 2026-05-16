<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if (empty($name)) {
    $errors[] = 'الاسم مطلوب';
}

if (empty($phone)) {
    $errors[] = 'رقم الجوال مطلوب';
}

if (empty($service)) {
    $errors[] = 'الخدمة المطلوبة مطلوبة';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

$services_map = [
    'mesotherapy' => 'ميزوثيرابي',
    'botox' => 'البوتوكس',
    'filler' => 'الفيلر',
    'laser' => 'الليزر',
    'skin' => 'علاج البشرة',
    'hifu' => 'HiFU 12D',
    'oxygeno' => 'جلسة الاكسجينو',
    'head-spa' => 'Japanese Head Spa',
    'peeling' => 'تقشير للوجه والجسم',
    'collagen' => 'محفزات الكولاجين',
    'exosome' => 'أكسوزوم للشعر',
    'cleaning' => 'تنظيف البشرة الطبي',
];

$service_name = $services_map[$service] ?? $service;

$booking_data = [
    'name' => htmlspecialchars($name),
    'phone' => htmlspecialchars($phone),
    'service' => $service_name,
    'message' => htmlspecialchars($message),
    'date' => date('Y-m-d H:i:s'),
];

$bookings_file = __DIR__ . '/../data/bookings.json';
$bookings_dir = dirname($bookings_file);

if (!is_dir($bookings_dir)) {
    mkdir($bookings_dir, 0755, true);
}

$bookings = [];
if (file_exists($bookings_file)) {
    $bookings = json_decode(file_get_contents($bookings_file), true) ?? [];
}

$bookings[] = $booking_data;
file_put_contents($bookings_file, json_encode($bookings, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'message' => 'تم إرسال طلب الحجز بنجاح! سنتواصل معك قريباً.'
]);
