
<?php
$header=array(
	"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
	"accept-language: co,id;q=0.9,ru;q=0.8,en-US;q=0.7,en;q=0.6",
	"referer: https://go.gets4link.com/",
	"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://fakecez.xyz/random2/1aPio.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$hasil = curl_exec($ch);

print_r($hasil);

?>
<p class="p9">gass hajar brook no iklan iklan club</p>