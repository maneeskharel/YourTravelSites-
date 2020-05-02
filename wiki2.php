

<?php

$search='Stack Overflow';
$search2=str_replace(' ','_',$search);
$url2 = 'https://en.wikipedia.org/api/rest_v1/page/summary/'.$search2;
$ch = curl_init($url2);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "TestScript"); // required by wikipedia.org server; use YOUR user agent with YOUR contact information. (otherwise your IP might get blocked)
$c = curl_exec($ch);

$json = json_decode($c);

//print_r($json);
echo $c;
//echo $json->extract; // get the main text content of the query (it's parsed HTML)


?>
