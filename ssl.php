<?php
#Author - MI SHAJIB

#============================================================
# Place HTTPS Request By CURL and Fix SSL Certificate Issue
#============================================================

$ch = curl_init("https://simplenote.com/");
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($ch);

$error = curl_error($ch);
if ($error) {
    echo $error;
}
