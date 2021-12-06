<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CryptoSrbija</title>
</head>

<body>

    <div id="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div id="gornja"><a class="atribut" href="#">Exchange</a></div>
        <div><a class="atribut" href="#">Blog</a></div>
        <div><a class="atribut" href="#">Nesta</a></div>
        <div><a class="atribut" href="#">About</a></div>
        <div><a class="atribut" href="#">Login</a></div>
    </div>


    <div id="main">
        <span id="open" onclick="openNav()">Menu</span>
        <div id="ceneKriptovaluta">
            <h2>Current prices</h2>
            <div id="sveKriptovalute">
                <div id="bitcoin" class="kriptovaluta">
                    <div class="oblikDivaKriptovalute">
                        <img id="slika" src="images/bitcoin-logo.png" alt="bitcoin">
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <h3>Bitcoin</h3>
                    </div>
                    <div id="cena" class="oblikDivaKriptovalute">
                        <h3>123</h3>
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <div id="btn">
                            <a href="#">Exchange</a>
                        </div>
                    </div>
                </div>
                <div id="eth" class="kriptovaluta">
                    <div class="oblikDivaKriptovalute">
                        <img id="slikaEth" src="images/eth.png" alt="bitcoin">
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <h3>Etherium</h3>
                    </div>
                    <div id="cena" class="oblikDivaKriptovalute">
                        <h3>123</h3>
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <div id="btn">
                            <a href="#">Exchange</a>
                        </div>
                    </div>
                </div>
                <div id="cardano" class="kriptovaluta">
                    <div class="oblikDivaKriptovalute">
                        <img id="slika" src="images/cardano.png" alt="bitcoin">
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <h3>Cardano</h3>
                    </div>
                    <div id="cena" class="oblikDivaKriptovalute">
                        <h3>123</h3>
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <div id="btn">
                            <a href="#">Exchange</a>
                        </div>
                    </div>
                </div>
                <div id="bnb" class="kriptovaluta">
                    <div class="oblikDivaKriptovalute">
                        <img id="slika" src="images/bnb.png" alt="bitcoin">
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <h3>BinanceCoin</h3>
                    </div>
                    <div id="cena" class="oblikDivaKriptovalute">
                        <h3>123</h3>
                    </div>
                    <div id="naziv" class="oblikDivaKriptovalute">
                        <div id="btn">
                            <a href="#">Exchange</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("open").style.display = "none";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0px";
            document.getElementById("main").style.marginLeft = "0px";
            document.getElementById("open").style.display = "block";
        }
    </script>
</body>

</html>