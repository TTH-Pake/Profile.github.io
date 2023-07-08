<?php
if(isset($_POST['submit'])) {
    // Lấy thông tin từ biểu mẫu
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Thiết lập thông tin email
    $to = "tanhiep2012003@gmail.com"; // Địa chỉ email của người nhận
    $subject = "New message from " . $name; // Chủ đề của email
    $body = "Name: " . $name . "\r\n"; // Nội dung của email
    $body .= "Email: " . $email . "\r\n";
    $body .= "Message:\r\n" . $message;

    // Thiết lập tiêu đề và thông tin bổ sung
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "CC: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Gửi email
    if(mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>