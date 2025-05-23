<?php
header('Content-type: text/html; charset=utf-8');
include('helper_momo.php');

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

// ✅ Lấy amount và orderInfo từ form POST
$amount = $_POST['amount'] ?? "10000";
$orderInfo = $_POST['orderInfo'] ?? "Thanh toán MoMo ATM";

$orderId = time() . "";
$requestId = time() . "";
$requestType = "payWithATM";

$redirectUrl = "http://localhost:8080/FINAL_23/checkout.php";
$ipnUrl = "http://localhost:8080/FINAL_23/checkout.php";
$extraData = $_POST["extraData"] ?? "";

// ✅ Tạo chữ ký
$rawHash = "accessKey=" . $accessKey .
    "&amount=" . $amount .
    "&extraData=" . $extraData .
    "&ipnUrl=" . $ipnUrl .
    "&orderId=" . $orderId .
    "&orderInfo=" . $orderInfo .
    "&partnerCode=" . $partnerCode .
    "&redirectUrl=" . $redirectUrl .
    "&requestId=" . $requestId .
    "&requestType=" . $requestType;

$signature = hash_hmac("sha256", $rawHash, $secretKey);

// ✅ Dữ liệu gửi đi
$data = array(
    'partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "MomoTestStore",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature
);

// ✅ Gửi yêu cầu và chuyển hướng
$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);
header('Location: ' . $jsonResult['payUrl']);
exit;
?>
