<?php
include_once ("conexiune.php");
$result = mysqli_query($mysqli, "SELECT * FROM tablouri"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/responsive768.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="page">
        <div class="grid-container">
            <div class="grid-item1">
                <div class="logo">Pictures</div>
                <ul class="main-nav">
                    <li id="first">MAGAZIN</li>
                    <li class="rand">
                        <i> <object data="photo/svg/catalog.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a class="text" href="catalog.html">Catalog</a>
                    </li>
                    <li class="rand">
                        <i> <object data="photo/svg/question.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="">Despre noi</a>
                    </li>
                    <li class="rand">
                        <i> <object data="photo/svg/alegerea cumparatorilor.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="">Alegerea cumpărătorilor</a>
                    </li>
                    <li class="rand">
                        <i> <object data="photo/svg/artist.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="">Pictorii noștri</a>
                    </li>
                    <li class="rand">
                        <i> <object data="photo/svg/logo truck.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="">Livrarea</a>
                    </li>
                    <li id="first">STUDIERE</li>
                    <li class="rand">
                        <i> <object data="photo/svg/article.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="articole.html">Articole</a>
                    </li>
                    <li class="rand">
                        <i> <object data="photo/svg/contact.svg" type="image/svg+xml" width="20" height="20"></object> </i>
                        <a href="">Date de contact</a>
                    </li>
                </ul>
            </div>
            <div class="grid-item2">
                <div class="meniul_orizontal">
                    <div class="shopping_cart">
                        <object data="photo/svg/supermarket.svg" type="image/svg+xml" width="20" height="20"></object>
                        <span><a href="cosul.html">Coșul de cumpărături</a></span>
                    </div>
                    <div class="cabinetul_personal">
                        <object data="photo/svg/user.svg" type="image/svg+xml" width="20" height="20"></object>
                        <span><a href="logare.html">Cabinetul personal</a></span>
                    </div>
                </div>
                <div class="slider">
                    <div class="grid-slider" id="grid-slider"></div>
                </div>
                <div class="produse">
                    <h1>Produsele noastre noi</h1>
                    <h3>De asemenea priviți categoria <a href="articole.html" style="text-decoration: underline;">Articole</a></h3>
                </div>
                <div class="produse__poze">
                    <div class="grid-poze">

                            <?php
                            while ($res = mysqli_fetch_array($result))
                            {   echo "<div class='produs'>";
                                $id = $res['id'];
                                $title = $res['title'];
                                $autor = $res['autor'];
                                $price = $res['price'];
                                $img = $res['img'];
                                echo "<img src='$img' style='object-fit: cover;' height='450px' width='400px' alt='img1'>";
                                echo "<p>$title</p>";
                                echo "<p>$autor</p>";
                                echo "<p>Price: $price $</p>";
                                echo "</div>";                        
                            }
                    ?>
                       
                    </div>
                </div>
                <div class="item-list">
                    <ul class="page_number">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#">Next-></a></li>
                    </ul>
                </div>
                <hr>
                <div class="grid-footer">
                    <div class="coloana" id="text_coloana">
                        <p>SERVICII</p>
                        <p>Portalul nostru este conceput și implementat ca o platformă gratuită în care nu există restricții nici pentru persoanele creative care pot posta complet liber orice lucrare cu noi (după ce a trecut un control preliminar de către un moderator), fie pentru cumpărătorii a căror alegere nu este limitată de sfera tehnicilor, genurilor și stilurilor. </p>
                    </div>
                    <div class="coloana">
                        <p>INFORMAȚII</p>
                        <p>Modalități de plată</p>
                        <p>Livrarea</p>
                        <p>Garant și retur</p>
                    </div>
                    <div class="coloana">
                        <p>CONTACTE</p>
                        <p>+(373) 69-352-170</p>
                        <p>username@gmail.com</p>
                        <p>Adresa magazinelor</p>
                    </div>
                    <div class="coloana">
                        <p>REȚELE</p>
                        <p><a href="https://www.instagram.com/vlada.gurduza/" target="_blank">Instagram</a></p>
                        <p><a href="https://www.facebook.com/sandurusuu" target="_blank">Facebook</a></p>
                        <p><a href="https://www.youtube.com/channel/UC-Htobb69LrAHoVt9KbEBpg?view_as=subscriber" target="_blank">Youtube</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/slider.js"></script>
</body>

</html>