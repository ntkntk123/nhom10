<?php
// Cấu hình GitHub
$githubToken = "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"; // Thay bằng token mới
$repoOwner = "ntkntk123"; // Tên tài khoản GitHub
$repoName = "nhom10"; // Tên repository
$filePath = "la.txt"; // File cần cập nhật
$commitMessage = "Thêm dữ liệu vào file";

// Nhận dữ liệu từ client
$data = isset($_POST['data']) ? $_POST['data'] : '';

if (empty($data)) {
    die("Dữ liệu trống, không thể lưu!");
}

// URL GitHub API
$githubUrl = "https://api.github.com/repos/$repoOwner/$repoName/contents/$filePath";

// Thiết lập header chung
$headers = [
    "User-Agent: MyApp",
    "Authorization: token $githubToken",
    "Accept: application/vnd.github.v3+json",
    "Content-Type: application/json"
];

// Lấy nội dung file hiện tại (nếu có)
$ch = curl_init($githubUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Kiểm tra response
if ($httpCode == 403) {
    die("Lỗi 403: Không có quyền truy cập repo. Kiểm tra token!");
} elseif ($httpCode == 404) {
    // Nếu file chưa tồn tại, tạo mới với nội dung ban đầu
    $oldContent = "";
    $fileSha = null;
} else {
    $fileInfo = json_decode($response, true);
    $oldContent = base64_decode($fileInfo['content']); // Lấy nội dung cũ
    $fileSha = $fileInfo['sha'] ?? null;
}

// Thêm dữ liệu mới vào file (xuống dòng)
$newContent = $oldContent . "\n" . $data;
$encodedContent = base64_encode($newContent);

// Tạo payload
$payload = json_encode([
    "message" => $commitMessage,
    "content" => $encodedContent,
    "sha" => $fileSha
]);

// Gửi request PUT để cập nhật file
$ch = curl_init($githubUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Kiểm tra kết quả
if ($httpCode == 200 || $httpCode == 201) {
    echo "Lưu thành công!";
} else {
    echo "Lưu thất bại! Mã lỗi: $httpCode";
}
?>
