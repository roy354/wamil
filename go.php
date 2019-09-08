<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://za.gl/links/go');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "_method=POST&_csrfToken=fd01016a188c52646a82eb433bceed80f4e4aaf15e08463b25808ca8d58ea7493d412203285c45a5ca6c48cba59bd7f3dd78d34a96c6fc9a4ba6a25d26c5d8b6&ad_form_data=ODhkMmRkODg4YjFiZWRjODZiM2M5N2FjMmE1YjBlNDMzMjliYzE2NjU5ZGVjM2MxMTY3MDRjY2VhNDA5NTgxNxJvvJabmkjI1%2BUe6A4eiKIrinGuGBK2G0hSSUf1%2Fk6Dxmuu3JD8VFFfvC8juGE0U5d07CqD%2BxrYVF8i9O7CBn8zvW4qShVuZzhh5ID7Eq%2Bi2KGwtmdQ2m5qvkWJXSDHgJvg6IlGWv%2Fvx%2F7GIzUTgxNRBcRknFVFjfO3YRPxAarszdZuCnPIDneuROyTPcnOfFSvIffz0ssKQVrqT6OGeq2G%2FeFuQMK5AnaWhB9VQz1P&_Token%5Bfields%5D=ede353d4076514ac02c11076d88f1f8e1cf49aa9%253Aad_form_data&_Token%5Bunlocked%5D=adcopy_challenge%257Cadcopy_response%257Ccoinhive-captcha-token%257Cg-recaptcha-response");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Origin: https://za.gl';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Referer: https://za.gl/O7PI';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Dnt: 1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}else
{
	echo $result;
}
curl_close($ch);



?>