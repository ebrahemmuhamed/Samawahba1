
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $trip_type = $_POST["trip_type"];
    $flight = $_POST["flight"];
    $notes = $_POST["notes"];

    $data = "الاسم: $name\nرقم الهاتف: $phone\nالعنوان: $address\nنوع الرحلة: $trip_type\nتذاكر طيران: $flight\nملاحظات: $notes\n---\n";
    file_put_contents("submissions.txt", $data, FILE_APPEND);
    echo "تم إرسال الطلب بنجاح!";
} else {
    echo "طريقة الإرسال غير صحيحة.";
}
?>
