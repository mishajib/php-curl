<?php
#Author - MI SHAJIB

#=============================================
#               CURL INTRODUCTION           #
#=============================================

$ch = curl_init('http://curl.lcl/hello.php');
// curl_setopt($ch, CURLOPT_URL, 'http://curl.lcl/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$var = curl_exec($ch);

echo strtoupper($var);
