<?php
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// API
if ($path === '/api.php') {
    require __DIR__ . '/backend/api.php';
    return true;
}

// Uploaded images
if (str_starts_with($path, '/uploads/')) {
    $file = __DIR__ . '/backend' . $path;
    if (is_file($file)) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $mime = [
            'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png',
            'gif' => 'image/gif', 'webp' => 'image/webp', 'svg' => 'image/svg+xml',
            'ico' => 'image/x-icon',
        ];
        header('Content-Type: ' . ($mime[$ext] ?? 'application/octet-stream'));
        header('Content-Length: ' . filesize($file));
        readfile($file);
        return true;
    }
}

// Frontend — serve from /app/frontend/
$frontendFile = __DIR__ . '/frontend' . $path;

if ($path === '/') {
    readfile(__DIR__ . '/frontend/index.html');
    return true;
}

if (is_file($frontendFile)) {
    $ext = strtolower(pathinfo($frontendFile, PATHINFO_EXTENSION));
    $mime = [
        'html' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript',
        'json' => 'application/json', 'png' => 'image/png', 'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg', 'gif' => 'image/gif', 'webp' => 'image/webp',
        'svg' => 'image/svg+xml', 'ico' => 'image/x-icon',
        'woff2' => 'font/woff2', 'woff' => 'font/woff', 'ttf' => 'font/ttf',
    ];
    header('Content-Type: ' . ($mime[$ext] ?? 'application/octet-stream'));
    readfile($frontendFile);
    return true;
}

// 404
http_response_code(404);
$notFound = __DIR__ . '/frontend/404.html';
if (is_file($notFound)) {
    readfile($notFound);
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Not found']);
}
return true;
