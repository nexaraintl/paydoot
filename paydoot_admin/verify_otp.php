<?php
session_start();
    $userOtp = $_POST['otp'] ?? '';

    if (!isset($_SESSION['otp']) || !isset($_SESSION['otp_expiry'])) {
        echo json_encode(['status' => 'error', 'message' => 'OTP not found']);
        exit;
    }

    if (time() > $_SESSION['otp_expiry']) {
        echo json_encode(['status' => 'expired', 'message' => 'OTP expired']);
        unset($_SESSION['otp'], $_SESSION['otp_expiry']);
        exit;
    }

    if ($userOtp == $_SESSION['otp']) {
        echo json_encode(['status' => 'success', 'message' => 'OTP verified']);
        unset($_SESSION['otp'], $_SESSION['otp_expiry']);
    } else {
        echo json_encode(['status' => 'invalid', 'message' => 'Incorrect OTP']);
    }
?>
