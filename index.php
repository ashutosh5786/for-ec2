<?php

// Health check endpoint
if ($_SERVER['REQUEST_URI'] == '/health') {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok']);
    http_response_code(200);
    exit;
}

// Default route
header('Content-Type: text/html');
echo "<h1>Hello from PHP Backend! 🚀</h1>";
echo "<p>Environment: " . getenv('APP_ENV') . "</p>";

?>
