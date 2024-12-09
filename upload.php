<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['file']['name']);
    $targetFile = $uploadDir . $fileName;

    // التحقق من رفع الملف
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo "تم رفع الصورة بنجاح!";
    } else {
        echo "حدث خطأ أثناء رفع الصورة.";
    }
}
?>
