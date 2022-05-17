<?php
require_once("Config/config.php");
require_once("Config/functions.php");
require_once("Config/WebPages.php");

if(isset($_REQUEST["PageNum"])){
    $PageNumVal  =NumFilter($_REQUEST["PageNum"]);
}else{
    $PageNumVal  =0;
}
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"content="<?php echo BackToStart($SDescription); ?>">
<meta name="keywords"content="<?php echo BackToStart($SKeywords); ?>">
<title><?php echo BackToStart($STitle); ?></title> 

<link rel="icon" type="image/x-icon" href="Images/favicon.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="Config/style.css">

<script type="text/javascript" src="Config/functions.js" language="javascript"></script>
<script type="text/javascript" src="Frameworks/jquery-3.6.0/jquery-3.6.0.min.js" language="javascript"></script>


</head>

<body>
    
    <a class="d-block px-5 py-2 text-center bg-primary text-black old-bv">111111</a>
    
    <table width="1065" height="100%" bgcolor="white" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="20" bgcolor="#7accff" align="center">
            <td><span> Eczanemize Hoş Geldiniz!! </span></td>
        </tr> 
        <tr height="110">
            <td> 
                <table width="1215" height="40" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#ade7ff" width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                        <td >&nbsp;</td>
                        <td width="160" height="16" class="WhiteColor" >
                            <a href="*****">
                                <img src="Images/login.ico" width="16" height="16" style="margin: auto"><span> Üye Girişi/Üye Ol</span>
                            </a>                      
                        </td>
                        <td width="105" class="WhiteColor">
                            <a href="*****">
                                <img src="Images/fav.ico" width="16" height="16" style="margin: auto"><span >Favoriler</span>
                            </a>
                        </td>
                        <td width="105" class="WhiteColor">
                            <a href="*****">
                                <img src="Images/cart.ico" width="16" height="16" style="margin: auto"><span>Sepetim</span>
                            </a>
                        </td>
                    </tr>
                </table>
                <table width="1215" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="bae8f5">
                        <td width="150" height="120"><img src="Images/logo3.png" width="120" height="120" align="center"></td>
                        <td>
                            <table width="1065" height="120" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr height="60">
                                    <td>&nbsp;</td>
                                    <td width="105" class="AnaMenu"><a href="index.php?PageNum=1"> Cilt Bakım</a></td>
                                    <td width="135" class="AnaMenu"><a href="index.php?PageNum=2"> Çocuk & Bebek</a></td>
                                    <td width="140" class="AnaMenu"><a href="index.php?PageNum=3"> Gıda Takviyeleri</a></td>
                                    <td width="90" class="AnaMenu"><a href="index.php?PageNum=4"> Ortopedi</a></td>
                                    <td width="120" class="AnaMenu"><a href="index.php?PageNum=5"> Cinsel yaşam</a></td>
                                    <td width="115" class="AnaMenu"><a href="index.php?PageNum=6"> Ağrı kesiciler</a></td>
                                    <td width="125" class="AnaMenu"><a href="index.php?PageNum=7"> Tüm Kategoriler</a></td>
                                </tr>
                                <tr height="60" align="center" style="margin-buttom: 5px">
                                    <td>&nbsp;</td>
                                    <td>search</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="400">
            <td valign="top">
                <table width="1215" align="center" border="0" cellpadding="0" cellspacing="0"> 
                    <tr>
                        <td align="center">
                            <?php
                            if((!$PageNumVal) or ($PageNumVal=="") or ($PageNumVal==0)){
                                include($PageNum[0]);
                            }else{
                                include($PageNum[$PageNumVal]);
                            }                            
                            ?> 

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="205">
            <td>                             
                <table width="1215" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#6bafd6">
                    <tr height="25">
                        <td class="FooterColor" style="border-bottom: 1px dashed black">&nbsp;<b>Eczanem</b></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor" style="border-bottom: 1px dashed black"><b>Üyelik & Hizmetler</b></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor" style="border-bottom: 1px dashed black"><b>Sözleşmeler</b></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor" style="border-bottom: 1px dashed black"><b>Ürünler</b></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor" style="border-bottom: 1px dashed black"><b>Yardım</b></td>
                    </tr>                   
                    <tr height="25">
                        <td class="FooterColor"><a href="index.php?PageNum=8">&nbsp;Hakkımızda</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=11">Giriş Yap</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=16">Üyelik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Öne Çıkan Markalar</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=21">Sıkça Sorulan Sorular</a></td>
                    </tr>
                    <tr height="25">
                        <td class="FooterColor"><a href="*****">&nbsp;Adres ve Telefon</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Yeni Üye Ol</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=17">Gizlilik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Avantajlı Paketler</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=22">Şikayet ve Talepleriniz</a></td>
                    </tr>
                    <tr height="25">
                        <td class="FooterColor"><a href="*****">&nbsp;Eczanem-de Satış Yap</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Kurumsal Üyelik</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=18">Mesafeli Satış Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">İndirimdekiler</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Canlı Yardım Desteği</a></td>
                    </tr>
                    <tr height="25">
                        <td class="FooterColor"><a href="*****">&nbsp;Eczanem-de Kariyer</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Kurumsal Hediye Çeki</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=19">Kullanım Koşulları</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="*****">Özel Ürün Siparişi</a></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=23">İptal & İade & Değişim</a></td>
                    </tr>
                    <tr height="25">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="FooterColor"><a href="index.php?PageNum=20">Özel Ürün Sipariş Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                </table> 
                <table width="1215" height="20" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#5da2c9">
                    <tr height="25">
                        <td align="center"><?php echo BackToStart($SCopyrightText)?>
                        </td>
                    </tr>
                </table>
                <table width="1215" height="30" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#5da2c9">
                    <tr>
                        <td align="center">
                            <img src="Images/footer-master-card.png" height="30"  >
                            <img src="Images/visa2.png" height="25" style="margin-top: 5px">
                            <img src="Images/American.png" height="30"  >
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>


<?php
$dataBaseLink   = null;
?>