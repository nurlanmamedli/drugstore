<?php
 include './Config/connect.php';
try{
    $dataBaseLink;
    }
catch(PDOException $Error){
    //echo "Connection Error<br /> . $Error->getMessage();" 
    die();
}

$ConfigQuery    = $dataBaseLink->prepare("Select * FROM settings LIMIT 1");  // for using settings data table in all pages
$ConfigQuery->execute();
$ConfigCount    = $ConfigQuery->rowCount();                                  // kaydin olup olmadigina bakiyorm
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
    //echo "Website config query error";    // sitemizde hata olursa
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