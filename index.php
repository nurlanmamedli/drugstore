<?php
require_once("Config/config.php");
require_once("Config/functions.php");
require_once("Config/WebPages.php");

if (isset($_REQUEST["PageNum"])) {
    $PageNumVal  = NumFilter($_REQUEST["PageNum"]);
} else {
    $PageNumVal  = 0;
}
?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo BackToStart($SDescription); ?>">
    <meta name="keywords" content="<?php echo BackToStart($SKeywords); ?>">
    <title><?php echo BackToStart($STitle); ?></title>

    <link rel="icon" type="image/x-icon" href="Images/favicon.png">
    <link href="bootstrap.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="Config/style.css">
    <link rel="stylesheet" href="Config/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



    <script type="text/javascript" src="Config/functions.js" language="javascript"></script>
    <script type="text/javascript" src="Frameworks/jquery-3.6.0/jquery-3.6.0.min.js" language="javascript"></script>


</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id=favorites viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
        </symbol>
        <symbol id="basket" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="people" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
        <symbol id="sexualLife" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"></path>
        </symbol>
        <symbol id="heartPulse" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Zm8.252-6.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z" />
        </symbol>
        <symbol id="bandage" viewBox="0 0 16 16">
            <path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242ZM12.293 8 8.027 3.734 3.738 8.031 8 12.293 12.293 8Zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Z" />
            <path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707ZM8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707Z" />
        </symbol>
        <symbol id="skin" viewBox="0 0 16 16">
            <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z" />
        </symbol>
        <symbol id="egg" viewBox="0 0 16 16">
            <path d="M14 10a6 6 0 0 1-12 0C2 5.686 5 0 8 0s6 5.686 6 10z" />
        </symbol>
    </svg>

    <div class="container" id="header">
        
            <div class="px-3 py-3 bg-dark text-white container align-items-center">                
                <a class="d-block col-12 text-center bg-dark text-white old-bv ">
                    Eczanemize Hoş Geldiniz!!
                </a>
            </div>
            <div class="px-3 py-2 border-bottom  bg-light">
                <div class="container d-flex flex-wrap justify-content-center">
                    <form class="col-12 col-lg-4 mb-2 mb-lg-0 me-lg-auto" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill">
                                <use xlink:href="#favorites" />
                            </svg>
                            Favoriler
                        </button>
                        <button type="button" class="btn btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket">
                                <use xlink:href="#basket" />
                            </svg>
                            Sepetim
                        </button>
                        <button type="button" class="btn btn-light text-dark me-2">Üye Girişi</button>
                        <button type="button" class="btn btn-primary">Üye Ol</button>
                    </div>
                </div>
            </div>
        
    </div>
    <div class="container">
        <main>
            <div class="container border-bottom">
                <div class="d-flex flex-wrap align-items-center justify-content-end ">
                    <li class=" align-items-beginning col-3 list-unstyled">
                        <a width="120" height="120" href="index.php">
                            <img src="Images/logo3.png" width="120" height="120">
                        </a>
                    </li>
                    <ul class="nav col-12 col-lg-auto my-2 my-md-0 text-small">
                        <li>
                            <a href="index.php" class="nav-link text-dark text-center">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#home" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="index.php?PageNum=1" class="nav-link text-dark">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#skin" />
                                </svg>
                                Cilt Bakım
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=2" class="nav-link text-dark">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#people" />
                                </svg>
                                Çocuk & Bebek
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=3" class="nav-link text-dark">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#egg" />
                                </svg>
                                Gıda Takviyeleri
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=4" class="nav-link text-dark">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#bandage" />
                                </svg>
                                Ortopedi
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=5" class="nav-link text-dark text-center">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#sexualLife" />
                                </svg>
                                Cinsel yaşam
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=6" class="nav-link text-dark text-center">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#heartPulse" />
                                </svg>
                                Ağrı kesiciler
                            </a>
                        </li>
                        <li>
                            <a href="index.php?PageNum=7" class="nav-link text-dark">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#grid" />
                                </svg>
                                Tüm Ürünler
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="align-items-center text-center">
                        <?php
                        if ((!$PageNumVal) or ($PageNumVal == "") or ($PageNumVal == 0)) {
                            include($PageNum[0]);
                        } else {
                            include($PageNum[$PageNumVal]);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="container">
        <footer class=" px-3 py-2 border-bottom mb-3 bg-light">
            <div class="row py-4 my-4 border-top">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Eczanem</h5>
                    <ul class="nav flex-column py-2 my-1 ">
                        <li class="nav-item mb-2"><a href="index.php?PageNum=8" class="nav-link p-0 text-muted">Hakkımızda</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Adres ve Telefon</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Eczanem-de Satış Yap</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Eczanem-de Kariyer</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Üyelik & Hizmetler</h5>
                    <ul class="nav flex-column py-2 my-1">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Giriş Yap</a></li>
                        <li class="nav-item mb-2"><a href="*****" class="nav-link p-0 text-muted">Yeni Üye Ol</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kurumsal Üyelik</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kurumsal Hediye Çeki</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Sözleşmeler</h5>
                    <ul class="nav flex-column py-2 my-1">
                        <li class="nav-item mb-2"><a href="index.php?PageNum=16" class="nav-link p-0 text-muted">Üyelik Sözleşmesi</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=17" class="nav-link p-0 text-muted">Gizlilik Sözleşmesi</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=18" class="nav-link p-0 text-muted">Mesafeli Satış Sözleşmesi</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=19" class="nav-link p-0 text-muted">Kullanım Koşulları</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=20" class="nav-link p-0 text-muted">Özel Ürün Sipariş Sözleşmesi</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Ürünler</h5>
                    <ul class="nav flex-column py-2 my-1">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Öne Çıkan Markalar</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Avantajlı Paketler</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">İndirimdekiler</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Özel Ürün Siparişi</a></li>
                    </ul>
                </div>

                <div class="col-5 col-md-2 mb-3">
                    <h5>Yardım</h5>
                    <ul class="nav flex-column py-2 ">
                        <li class="nav-item mb-2"><a href="index.php?PageNum=21" class="nav-link p-0 text-muted">Sıkça Sorulan Sorular</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=22" class="nav-link p-0 text-muted">Şikayet ve Talepleriniz</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Canlı Yardım Desteği</a></li>
                        <li class="nav-item mb-2"><a href="index.php?PageNum=23" class="nav-link p-0 text-muted">İptal & İade & Değişim</a></li>
                    </ul>
                </div>

                <div class="col-md-7 mb-1">
                    <form>
                        <h6>Yeni ürünlerden ve kampanyalardan haberdar olmak için abone olun</h6>
                        <div class="d-flex flex-column flex-sm-row w-200 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Abone Ol</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; <?php echo BackToStart($SCopyrightText) ?></p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <img src="Images/footer-master-card.png" height="30">
                    </li>
                    <li class="ms-3">
                        <img src="Images/visa2.png" height="25" style="margin-top: 5px">
                    </li>
                    <li class="ms-3">
                        <img src="Images/American.png" height="30">
                    </li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>


<?php
$dataBaseLink   = null;
?>
