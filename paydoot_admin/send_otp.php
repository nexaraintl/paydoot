<?php
session_start();

// Validate mobile number
if (!isset($_POST['mobile']) || !preg_match('/^[6-9]\d{9}$/', $_POST['mobile'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid mobile number']);
   
}

$mobile = $_POST['mobile'];
$otp = rand(100000, 999999); // Generate 6-digit OTP
$_SESSION['otp'] = $otp;
$_SESSION['otp_expiry'] = time() + 300; // OTP valid for 5 minutes
// TextLocal API credentials
$authKey = "353059444f4f5434373928";
$senderId = "PAYDOT";
$route = "2";
$country = "0";
$dltTemplateId = "1707175569681921109"; // Replace with actual DLT Template ID
$mobileNumber = urlencode("91{$mobile}");

// Prepare message
$message = urlencode("Dear Partner, Your Web login OTP is {$otp}. Do not share with anyone for security reasons. - PayDoot");

$url = "http://control.yourbulksms.com/api/sendhttp.php?authkey=$authKey&mobiles=$mobileNumber&sender=$senderId&route=$route&country=$country&DLT_TE_ID=$dltTemplateId&message=$message";

// Initialize cURL
$ch = curl_init($url);

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Optional, use only if needed

// Execute request
$response = curl_exec($ch);

curl_close($ch);

// Optional: log or parse response
echo json_encode(['status' => 'success', 'message' => 'OTP sent successfully']);
?>
