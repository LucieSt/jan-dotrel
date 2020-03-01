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
                <p>Jan vystudoval Estetiku na Filozofické fakultě Univerzity Karlovy se zaměřením na teorii fotografie. V roce 2016 absolvoval s diplomovou prací „Transformace kultovní a konceptuální hodnoty v dějinách fotografie“, ve které se pokusil představit vlastní teorii ohledně nového čtení vzniku a vývoje fotografie. Jeho teoretické uvažování stojí zejména na rozpracování myšlenek autorů, jako jsou Geoffrey Batchen, Roland Bartes, Georges Didi-Huberman nebo Michel Foucault.</p>
                <p>V současné době pracuje v soukromé galerii Kvalitář jako kurátor. Galerie Kvalitář se skládá ze dvou autonomních výstavních prostorů a architektonického studia. Zde Jan působí jako kurátor designu a soustředí se zejména na prezentaci současné české designové scény. Za poslední dobu realizoval například výstavy Herrmann & Coufal: Beyond, René Šulc: Organon, Acheron / výstava pohřebních schránek nebo A 440 / gramofon jako objekt.</p>
                <p>V letech 2011–2015 pracoval jako asistent fotografa Ivana Pinkavy. Během této spolupráce se podílel na mnohých projektech s volnou i zakázkovou fotografií. Zároveň mu tato spolupráce poskytla skutečné vzdělání v oblasti volného umění. Produkčně pracoval například na výstavách Trones délaissés ve Štrasburku (2015), Stripped Off Ornament v Bratislavě (2013), Remains ve Washingtonu D.C. (2012) nebo Opposite White v Lectoure (2011).</p>
                <p>Je spoluzakladatelem streetartové skupiny Pražská služba, která má za sebou několik realizací do veřejného prostoru. V projektu Mánes for sale! (2016) se Pražská služba snažila o znovu-připomenutí významu kulturní budovy Mánesa pomocí intervence na jeho přilehlém ostrůvku. Dalším urbanistickým apelem bylo vztyčení levitující sochy 2081: Pomník developerům (2015), coby protest proti devastaci historických budov v Celetné ulici. Happening Wall Is Over! (2014) spočíval v přetření celé Lennonovy zdi na bílo k příležitosti výročí 17. listopadu.</p>
                <p>Jan doposud realizoval dvě sólové výstavy. První výstava (2010) odstartovala jeho finální zaměření na fotografické médium, ve druhé výstavě Vteřiny symetrie (2012) se primárně soustředil na dekadentní tématiku, kterou formálně zpracoval pomocí diptychů a triptychů. Tuto výstavu doprovodil kurátorským textem prof. Miroslav Petříček, Dr.</p>
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

</body>
</html>

