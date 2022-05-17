<?php
try{
    $dataBaseLink = new PDO("mysql:host=localhost;dbname=drugstore;chaset=UTF8","root","");
    }
catch(PDOException $Error){
    //echo "Connection Error<br /> . $Error->getMessage();"
    die();
}

$ConfigQuery    = $dataBaseLink->prepare("Select * FROM settings LIMIT 1");
$ConfigQuery->execute();
$ConfigCount    = $ConfigQuery->rowCount();
$Config         = $ConfigQuery->fetch(PDO::FETCH_ASSOC);

if ($ConfigCount>0) {
    $SName             = $Config["SName"];
    $STitle            = $Config["STitle"];
    $SDescription      = $Config["SDescription"];
    $SKeywords         = $Config["SKeywords"];
    $SCopyrightText    = $Config["SCopyrightText"];
    $SLogo             = $Config["SLogo"];
    $SEmailAddress     = $Config["SEmailAddress"];
    $SEmailPassword    = $Config["SEmailPassword"];

}
else{
    //echo "Website config query error";
    die();
}

$TextQuery    = $dataBaseLink->prepare("Select * FROM sozlesmeler LIMIT 1");
$TextQuery->execute();
$TextCount    = $TextQuery->rowCount();
$Text         = $TextQuery->fetch(PDO::FETCH_ASSOC);

if ($TextCount>0) {
    $Hakkimizda                 = $Text["Hakkimizda"];
    $UyelikSozlesmesi           = $Text["UyelikSozlesmesi"];
    $GizlilikSozlesmesi         = $Text["GizlilikSozlesmesi"];
    $MesafeliSatisSozlesmesi    = $Text["MesafeliSatisSozlesmesi"];
    $KullanimKosullari          = $Text["KullanimKosullari"];
    $OzelUrunSozlesmesi         = $Text["OzelUrunSozlesmesi"];
    $SikayetVeTalepler          = $Text["SikayetVeTalepler"];

}
else{
    //echo "Website Text query error";
    die();
}





?>