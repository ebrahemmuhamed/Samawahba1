
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = "اسم: " . $_POST["name"] . "\n";
  $data .= "رقم: " . $_POST["phone"] . "\n";
  $data .= "العنوان: " . $_POST["address"] . "\n";
  $data .= "الرحلة: " . $_POST["trip_type"] . "\n";
  $data .= "تذاكر طيران: " . $_POST["flight"] . "\n";
  $data .= "ملاحظات: " . $_POST["notes"] . "\n";
  $data .= "--------------------------\n";

  file_put_contents("submissions.txt", $data, FILE_APPEND);
  echo "تم تسجيل البيانات بنجاح!";
} else {
  echo "الطلب غير صالح.";
}
?>
