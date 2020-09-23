<?php
#Author - MI SHAJIB

#=============================================
#       Remote File Download with CURL      #
#=============================================
set_time_limit(0); // extend execution time

$ch       = curl_init("https://images.unsplash.com/photo-1593642634315-48f5414c3ad9?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80");
$filename = fopen("image2.jpg", "w");
curl_setopt($ch, CURLOPT_FILE, $filename); // remote file download
curl_exec($ch);
