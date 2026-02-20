<?php
// includes/auth_middleware.php
require_once __DIR__ . '/security.php';
require_once __DIR__ . '/functions.php';

function check_auth($required_role = null) {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['user_id'])) {
        if(strpos($_SERVER['REQUEST_URI'], '/api/') !== false) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized']);
            exit();
        }
        header("Location: " . BASE_URL . "login.php");
        exit();
    }
    if ($required_role && $_SESSION['role'] !== 'admin' && $_SESSION['role'] !== $required_role) {
        die("Access Denied");
    }
}
