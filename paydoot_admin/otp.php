<?php
$authKey = "353059444f4f5434373928";
$mobileNumber = "7276759601";
$senderId = "PAYDOT";
$route = "2";
$country = "0";
$dltTemplateId = "1707175569681921109"; // Replace with actual DLT Template ID
$otp = rand(100000, 999999);
$message = urlencode("Dear Partner, Your Web login OTP is {$otp}. Do not share with anyone for security reasons. - PayDoot");

$url = "http://control.yourbulksms.com/api/sendhttp.php?authkey=$authKey&mobiles=$mobileNumber&sender=$senderId&route=$route&country=$country&DLT_TE_ID=$dltTemplateId&message=$message";

// Initialize cURL
$ch = curl_init($url);

// Set options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Optional, use only if needed

// Execute request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}

// Close cURL
curl_close($ch);
?>

