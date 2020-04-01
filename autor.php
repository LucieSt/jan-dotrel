<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 01.05.17
 * Time: 19:43
 */

?>
<!doctype html>

<html>
<?php include 'head.php' ?>


<body>

<div class="container-fluid main">
    <?php include 'menu.php' ?>


    <div class="content-container">
        <div class="row no-gutters autor">

            <div class="col-md-6 nopadding">

                <div id="autor-carousel" class="carousel fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/autor/thumbs/01.jpg" class="autor-image">
                        </div>
                        <div class="item">
                            <img src="images/autor/thumbs/02.jpg" class="autor-image">
                        </div>
                        <div class="item">
                            <img src="images/autor/thumbs/03.jpg" class="autor-image">
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-md-6 autor-text nopadding">
                <p>Jan Dotřel vystudoval Estetiku na Filozofické fakultě Univerzity Karlovy se zaměřením na teorii
fotografie. Absolvoval s diplomovou prací Transformace kultovní a konceptuální hodnoty v dějinách
fotografie, ve které se pokusil představit vlastní teorii ohledně nového čtení vzniku a vývoje
fotografie. Jeho teoretické uvažování stojí zejména na rozpracování myšlenek autorů, jako jsou
Geoffrey Batchen, Roland Bartes, Georges Didi-Huberman nebo Michel Foucault.</p>
                <p>Dlouhodobě pracoval jako asistent fotografa Ivana Pinkavy. Spolupracoval například na výstavách
Trones délaissés ve Štrasburku (2015), Stripped Off Ornament v Bratislavě (2013), Remains ve
Washingtonu D.C. (2012) nebo Opposite White v Lectoure (2011).</p>
                <p>Svoji autorskou tvorbu Jan doposud představil na třech sólových výstavách. První výstava (2010)
odstartovala jeho finální zaměření na fotografické médium, ve druhé výstavě Vteřiny symetrie
(2012) se primárně soustředil na dekadentní tématiku, kterou formálně zpracoval pomocí diptychů
a triptychů. Tuto výstavu doprovodil kurátorským textem prof. Miroslav Petříček, Dr. Ve výstavě
Deeply Ordered Chaos (2018) se soustředil na matematické principy a geometrii obsažené v
přírodě, které zpracovával pomocí analogové středoformátové fotografie a site-specific instalací.</p>
                <p>V současné době pracuje jako kurátor v galerii Kvalitář, kde se zaměřuje na prezentaci volného
umění i designu. Jeho kurátorské směřování sleduje zejména vzájemné propojení umění a vědy.
Stěžejním tématem této mezioborové syntézy je pro něj primárně téma vesmíru, kterému se chce
kontinuálně věnovat. Tato výstavní koncepce vyústila v jeho souborném projektu SPACE/ art,
design, architecture and science (2019).</p>
                </div>

        </div>
    </div>



</div>

<script>
    $('#autor-carousel').carousel({
        interval: 4000,
        pause: "false"
    })
</script>

<script src="script.js"></script>

</body>
</html>

