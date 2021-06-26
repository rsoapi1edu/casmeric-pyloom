<?php
error_reporting(0);
include_once 'function.php';
include_once 'getHead.php';




function RemStr($string, $start, $end)
{
	$part1 = explode($start, $string)[0];
	$leftpart = explode($start,$string)[1];
	$part2 = explode($end, $leftpart)[1];
	$result = $part1.$part2;
	return $result;
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}

if(isset($_GET['number'])) {
$number = $_GET['number'];
//$number = "34634058231";

if (is_numeric($number) == 1) {

  $file = 'RSOcookie.txt';
  $now   = time();
  if ($now - filemtime($file) >= 60 * 60 * 2) { // 2 Hours
          $cookie = grabRSOcookie();
         if(strpos($cookie, 'cfduid')) {
          $fh = fopen($file, 'w');
          fwrite($fh, $cookie);
          fclose($fh);
         }
          $cookie = file_get_contents($file);
        }
        else {
          $cookie = file_get_contents($file);
        }

 


$ua = random_ua();
$parray = array(
  '8d573e1f66f04eca0ac9f58371831bc120c57d5b',
  'af8875b3947df6e7086052ec1243b4f240d87c0b',
  '09fa1e08866a58b4cd60ae4b5c43d91803e9e617',
  '7e8322196b95e846becfa3cd5b7d9955508673a6',
  '6d54f6661d4e9871a9ddba9ffe8fab6fcfcf6529',
  '74cd9d519ee0781e5f9588b3307859f06fa0d5bf',
  '652c849a0c22c54cadb9faa99e9c06e3042faec0',
  '30b346a23563bcd73a8a1ad2ca0c8e13f1bfa740',
  '83c6a406a11393bae721ad349e3022223d54ec81',
  '7728eac7eaa21e99ddd715135a8d3441f3d2ef47',
  '0c016ce1b9f6fc249127c86fbbd7df24df7584c0'

);

if (isset($parray)) {
    $proxyapi = $parray[array_rand($parray)]; // select a random proxy api
}
else {
    $proxyapi = '0c016ce1b9f6fc249127c86fbbd7df24df7584c0';
}

$webshare_token = $proxyapi;


$prox = curl_init();
curl_setopt($prox, CURLOPT_URL, 'https://proxy.webshare.io/api/proxy/list/');
curl_setopt($prox, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($prox, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Authorization: Token '.$webshare_token.'';
curl_setopt($prox, CURLOPT_HTTPHEADER, $headers);
$result1 = curl_exec($prox);
curl_close($prox);

$prox_res = json_decode($result1, 1);
$count = $prox_res['count'];
$random = rand(0,$count-1);

$proxy_ip = $prox_res['results'][$random]['proxy_address'];
$proxy_port = $prox_res['results'][$random]['ports']['http'];
$proxy_user = $prox_res['results'][$random]['username'];
$proxy_pass = $prox_res['results'][$random]['password'];

$proxy = ''.$proxy_ip.':'.$proxy_port.'';
$credentials = ''.$proxy_user.':'.$proxy_pass.'';



$url = 'https://receive-sms-online.info/'.$number.'-India';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie-'.$proxy.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie-'.$proxy.'.txt');
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array (
'authority: receive-sms-online.info',
'method: GET',
'path: /'.$number.'-India',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: '.$cookie,
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: '.$ua,
//'x-requested-with: XMLHttpRequest'
));
$res = curl_exec($ch);

$alt_x = explode('<div id="old_count" style="display:none">', $res)[1];
$alt_x = explode('</div>', $alt_x)[0];

$alt_key = explode('url: "/script_a.php?key=', $res)[1];
$alt_key = explode('&phone=', $alt_key)[0];
//$alt_key = explode('&alt_x="+n', $alt_key)[0];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://receive-sms-online.info/script_a.php?key='.$alt_key.'&phone='.$number.'&alt_x='.$alt_x);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie-'.$proxy.'.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie-'.$proxy.'.txt');
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: receive-sms-online.info',
'method: GET',
'path: /get_sms_439704.php?phone='.$number,
'scheme: https',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'cookie: '.$cookie,
'content-type: application/x-www-form-urlencoded',
'referer: https://receive-sms-online.info/'.$number.'-India',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua,
'x-alt-data: '.$alt_x,
'x-requested-with: XMLHttpRequest',
));

$result2 = curl_exec($ch);

$result2 = RemStr($result2,'<th width="auto" rowspan="15" >','</script></th>');
$result2 = RemStr($result2,'<div align="center">','</div>');
$result2 = str_replace('<th width="auto">From</th>', '', $result2);
$result2 = str_replace('<th width="auto">SMS Messages</th>', '', $result2);
$result2 = str_replace('<th width="auto">Added</th>', '', $result2);



$randomid = mt_rand(10000,999999);
$result2 = str_replace(array("\r","\n"),"",$result2);
$result2 = str_replace('<tr></tr><tr>',"<tr>",$result2);
$result2 = str_replace('</tr><tr>',"</tr> <tr>",$result2);
$result2 = str_replace('</tr> <tr>',"</tr>@@INBOXDIVIDER@@<tr>",$result2);
$result2 = str_replace('<tr><th colspan="3"></th></tr>@@INBOXDIVIDER@@','',$result2);


$result2 = str_replace('<tr><td data-label="From   :">',"@@from@@",$result2);
$result2 = str_replace('</td><td data-label="Message:">',"@@msg@@",$result2);
$result2 = str_replace('</td></tr>',"@@end@@",$result2);
$result2 = str_replace('</td><td id="dtt"',"@@time@@",$result2);
$result2 = htmlspecialchars($result2, ENT_COMPAT);



$string = explode("@@INBOXDIVIDER@@", $result2);
/*
foreach (range(0, 20) as $i) {
   $msgstring = $string[$i];

   $from = GetStr($msgstring,'@@from@@','@@msg@@');
   $msg = GetStr($msgstring,'@@msg@@','@@time@@');
   $time = GetStr($msgstring,'Added:&quot;&gt;','@@end@@');
   echo $from.'    and    '.$msg.'    and    '.$time.'<br/>';
}
*/
echo "[";
foreach (range(0, 30) as $i) {
   $msgstring = $string[$i];

   $from = GetStr($msgstring,'@@from@@','@@msg@@');
   $msg = GetStr($msgstring,'@@msg@@','@@time@@');
   $time = GetStr($msgstring,'Added:&quot;&gt;','@@end@@');
   //echo $from.'    and    '.$msg.'    and    '.$time.'<br/>';

   $json = array("from"=> "$from", "msg"=>"$msg", "time"=>"$time");
	echo json_encode($json).' ,';
}
echo "]";

}
else {
    echo "Incorrect Number Format";
}

}
else {
    echo "Please Provide a number";
}


 ?>
