<?php

function grabRSOcookie() {

  $parray = array(
    '56079e9f55edc989cf96d9f3da75b1fd',
    'f991f2b29c0bdc6712965207f5c4690c',
    'cc3b57574a664d72a2303b59deda2060',
    '17b05bf4ab87c707d1c5db1b9ad0814b',
    'b81b316de21b567f15b172290606c292',
    'dea558a123b548e06d6d6d0217b3f40b'

  );

  if (isset($parray)) {
      $proxyapi = $parray[array_rand($parray)]; // select a random proxy api
  }
  else {
      $proxyapi = 'dea558a123b548e06d6d6d0217b3f40b';
  }

$key = $proxyapi;

$url = 'http://api.scraperapi.com?api_key='.$key.'&url=https://receive-sms-online.info/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array (
'authority: receive-sms-online.info',
'method: GET',
'path: /',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: none',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.146 Safari/537.36',
'x-requested-with: XMLHttpRequest'
));

$res = curl_exec($ch);

$cookie = explode('set-cookie: ', $res)[1];
$cookie = explode('expires=',$cookie)[0];
$cookie = $cookie."smsplaza=1; tlgrm=0";

return $cookie;

}






 ?>
