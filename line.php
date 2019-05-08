 <?php
  

function send_LINE($msg){
 $access_token = '7WKfyGdMkgtzt4dmhHvyopzD8UuxHvFj+2BMn07oYzHuJMbNtStm4tMjHk4boRD9lJvIo6C/cjQxu0n5pgloLtCuH7PDaJZItfF5TpbekgchGNhRlvcmyhtFJ3sHTjtW/rV1mxgIUrLTKCU6ITfWqgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue57532424efc2a155bcb69d5f0d67116',
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
