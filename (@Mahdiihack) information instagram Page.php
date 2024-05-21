<?php
header('Content-Type: application/json');
$username = $_GET['id'];
echo getAccountInformation($username);

function getAccountInformation($username)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/$username/?__a=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($ch);
/*
تهیه شده توسط تیم برنامه نویسی مهدی هک
T.me/Mahdiihack
*/
}