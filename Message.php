<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = 'https://t.me/dhydgdhudsjcudihbot';
    $chat_id = '6923345183'; // Replace with your chat ID
    $message = $_POST['message'];

    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Failed to send message.";
    } else {
        echo "Message sent successfully!";
    }
}
?>