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



    <div class="row no-gutters autor">

        <div class="col-md-5 nopadding">

            <div id="autor-carousel" class="carousel" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/autor/small/1.jpg" class="autor-image">
                    </div>
                    <div class="item">
                        <img src="images/autor/small/2.jpg" class="autor-image">
                    </div>
                    <div class="item">
                        <img src="images/autor/small/3.jpg" class="autor-image">
                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-5 autor-text nopadding">
            <p>
            Jan Dotřel vystudoval Estetiku se zaměřením na teorii fotografie na FF UK. V roce 2016 diplomoval s prací
            Transformace kultovní a konceptuální hodnoty v dějinách fotografie. Již od prvního ročníku se soustředil
            na fotografickou teorii zastoupenou zejména u autorů jako jsou Geoffrey Batchen, Roland Barthes, Walter Benjamin,
            Jaques Derrida, Georges Didi-Huberman, Michel Foucault, nebo Alan Sekula.
            </p>
            <p>
            V současné době pracuje v soukromé galerii Kvalitář jako kurátor sekce designu. Galerie Kvalitář se skládá
            z dvou autonomních výstavních prostorů a architektonického studia. Zde se Jan Dotřel soustředí  zejména
            na prezentaci současné české designové scény. Zároveň spolupracuje na projektu Designbanka, který disponuje
            hlavně funkcinalistickým nábytkem a ikonami Bauhausu.
            </p>
            <p>
            V letech 2011 - 2015 pracoval jako asistent a produkce pro fotografa Ivana Pinkavu. Při této spolupráci
            se mimo jiné podílel například na výstavách na jeho výstavách Trones délaissés ve Strasbourgu (2015),
            Stripped off Ornament v Bratislavě (2013), Remains ve Washingtonu D.C. (2012), nebo Opposite white v Lectoure (2011).
            Mimo volnou tvorbu asistoval také při realizaci mnohých fotografických zakázek.
            </p>
            <p>
            Je spolu-zakladatelem streetartové skupiny Pražská služba, která má za sebou několik realizací do veřejného prostoru.
            V projektu Mánes for sale! (2016) se Pražská služba snažila o znovu-připomenutí významu kulturní budovy Mánesa pomocí
            intervece na jeho přilehlém ostrůvku.
            Dalším urbanistickým apelem bylo vztyčení levitující sochy 2081: Pomník developerům (2015), coby protest proti
            devastaci historických budov v Celetné ulici. Happeninig Wall is over! (2014) spočíval v přetření celé Lennonovy
            zdi na bílo k příležitosti výročí 17.listopadu.
            </p>
            <p>
            Jan Dotřel doposud realizoval dvě sólové výstavy. První (2010), která odstartovala jeho finální zaměření se na
            fotografické médium.  Ve druhé  (2012) se soustředil zejména na dekadentní tématiku, kterou propojil s abstrahahujícími motivy,
            tuto výstavu Vteřiny symetrie doprovodil kurátorským textem prof. Miroslav Petříček, Dr. V posledním cyklu Grid pracuje
            s analogovou, středoformátovou fotografií, jejíž téma pramení hlavně z pozorování přirozeného světa a dávání jeho aspektů
            do nových, abstrahovaných souvislostí.
            </p>
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

