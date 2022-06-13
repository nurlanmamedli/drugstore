<?php
$IPAddress      =$_SERVER["REMOTE_ADDR"];                   // 
$STimer         =time();
$DateHour       =date("d.m.Y H:i:s", $STimer);

function Security($temp){
    $CleanSpace     = trim($temp);//bosluqlari temizleyirik
    $CleanTags      = strip_tags($CleanSpace);//taglari temizleyirik
    $CleanSpecials  = htmlspecialchars($CleanTags);//spesyel karakterleri temizliyoruz etkisiz edirik
    $Result         = $CleanSpecials;
    return $Result;
}

function CharDelete($temp){
    $DelProcess    = preg_replace("/[^0-9]/","",$temp);//sayilar haric hepsini silirem
    $Result       =$DelProcess;
    return $Result;
} 

function NumFilter($temp){
    $CleanSpace     = trim($temp);                          //bosluqlari temizleyirik
    $CleanTags      = strip_tags($CleanSpace);              //taglari temizleyirik
    $CleanSpecials  = htmlspecialchars($CleanTags);         //tirnaklar etkisiz edirik
    $CleanChar      = CharDelete($CleanSpecials);
    $Result         = $CleanSpecials   ;
    return $Result;
}

function BackToStart($temp){
    $Return         = htmlspecialchars_decode($temp, ENT_QUOTES); //donusdurduklerimizi geri donustururuz
    $Result         = $Return;
    return $Result;
}



?>