 <?php
  

function send_LINE($msg){
 $access_token = 'jJCDqRn33sV6GWviE1Epw8F5XTqDsrtarXFZxGk0S3cbVuEt45NU4mV7yK0IiQQHaGYUo1wB2N49rA/1h1NdO5rpBU8mwrIX3jxbGvCqUOl5ZX0t5nkiEBudfzO2WUmzPW1OiClElQmHd82FVpLOlgdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'k.chuttiwat',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
