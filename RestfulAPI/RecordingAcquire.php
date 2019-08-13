<?php
// curl -u username:password url -H "Content-Type:application/json" -d 'body json'
//$ curl -u <customerID>:<customer certificate> https://api.agora.io/v1/apps/<appid>/cloud_recording/acquire -H "Content-Type:application/json" -d '{"cname":"<频道号>","uid":"<录制uid>","clientRequest":{}}'
    
    $url = "https://api.agora.io/v1/apps/<your appid>/cloud_recording/acquire"; 
    $arr_header[] = "Content-Type:application/json"; 
    $arr_header[] = "Authorization: Basic ".base64_encode("<your customerID>:<your customerCertificate>"); //http basic auth 

    $data = array('cname'=>'<cname>','uid'=>'<录制uid>','clientRequest'=>json_decode("{}"));
    $data_json = json_encode($data);
    echo $data_json;

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url ); //request url
    curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //print

    if(!empty($arr_header)){ 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arr_header); 
    } 
    $response = curl_exec($ch); 
    curl_close($ch);
    echo $response; 
    return json_decode($response); 
?>