<?php
$ch = curl_init("http://api.open-notify.org/iss-now/");
curl_exec($ch);
curl_close($ch);
?>