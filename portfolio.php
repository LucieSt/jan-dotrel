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

<div class="container-fluid">
    <?php include 'menu.php' ?>


    <div class="row portfolio">
        <div class="col-md-3">
            <div class="gallery1">
                <a href="images/portfolio/grid1/1.%20Portret%20pro%20Eadwearda%20J.%20Muybridge.jpg"><img src="images/portfolio/Grid%20I.jpg" class="portfolio-image" id="grid1"></a>
                <a href="images/portfolio/grid1/2.%20Grid%203.jpg"></a>
                <a href="images/portfolio/grid1/3.%20Grid%204.jpg"></a>
                <a href="images/portfolio/grid1/4.%20Fibonacci.jpg"></a>
                <a href="images/portfolio/grid1/5.%20Grid,%20Aquarium.jpg"></a>
                <a href="images/portfolio/grid1/6.%20Misto%20me%20prvni%20vzpominky.jpg"></a>
                <a href="images/portfolio/grid1/7.%20Lysis,%20Dekompozice.jpg"></a>
                <a href="images/portfolio/grid1/8.%20Krystal.jpg"></a>
            </div>
        </div>
        <div class="col-md-3">


            <div class="gallery2">
                <a href="images/portfolio/grid2/1.%20Grid%206,%20Pocatecni%20Singularita.jpg"><img src="images/portfolio/Land%20Art.jpg" class="portfolio-image" id="grid2"></a>
                <a href="images/portfolio/grid2/2.%20Stephen%20Hawking.jpg"></a>
                <a href="images/portfolio/grid2/3.%20Lysis,%20dekompozice%202.jpg"></a>
                <a href="images/portfolio/grid2/4.%20Lysis,%20dekompozice%203.jpg"></a>
                <a href="images/portfolio/grid2/5.%20Lysis.jpg"></a>
                <a href="images/portfolio/grid2/6%20Aqarium,%20Grid.jpg"></a>
                <a href="images/portfolio/grid2/7.%20Grid%202.jpg"></a>
                <a href="images/portfolio/grid2/Roland%20Batrhes%20text.jpg"></a>
            </div>


        </div>
        <div class="col-md-3">
            <img src="images/portfolio/Grid%20II.jpg" class="portfolio-image" id="grid3">
        </div>
        <div class="col-md-3">
            <img src="images/portfolio/Relics.jpg" class="portfolio-image" id="grid4">
        </div>
    </div>

    <div class="row portfolio">
        <div class="col-md-3">
            <img src="images/portfolio/Grid%20III.jpg" class="portfolio-image" id="grid5">
        </div>
        <div class="col-md-3">
            <img src="images/portfolio/Blinks%20of%20Symmetry.jpg" class="portfolio-image" id="grid6">
        </div>
        <div class="col-md-3">
            <img src="images/portfolio/The%20Early%20Years.jpg" class="portfolio-image" id="grid7">
        </div>
        <div class="col-md-3">
            <img src="images/portfolio/Portrait.jpg" class="portfolio-image" id="grid8">
        </div>
    </div>

</div>

<script>
    $('.gallery1').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            image: {
                cursor: null
            }
        });
    });
    $('.gallery2').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            image: {
                cursor: null
            }
        });
    });



    $('#grid1').hover(function(){
        $('#grid1').attr('src', 'images/portfolio/BOX/Grid%20I%20box.jpg')
    }, function(){
        $('#grid1').attr('src', 'images/portfolio/Grid%20I.jpg')
    });

    $('#grid2').hover(function(){
        $('#grid2').attr('src', 'images/portfolio/BOX/Land%20Art%20box.jpg')
    }, function(){
        $('#grid2').attr('src', 'images/portfolio/Land%20Art.jpg')
    });


    $('#grid3').hover(function(){
        $('#grid3').attr('src', 'images/portfolio/BOX/Grid%20II%20box.jpg')
    }, function(){
        $('#grid3').attr('src', 'images/portfolio/Grid%20II.jpg')
    });


    $('#grid4').hover(function(){
        $('#grid4').attr('src', 'images/portfolio/BOX/Relics%20box.jpg')
    }, function(){
        $('#grid4').attr('src', 'images/portfolio/Relics.jpg')
    });


    $('#grid5').hover(function(){
        $('#grid5').attr('src', 'images/portfolio/BOX/Grid%20III%20box.jpg')
    }, function(){
        $('#grid5').attr('src', 'images/portfolio/Grid%20III.jpg')
    });


    $('#grid6').hover(function(){
        $('#grid6').attr('src', 'images/portfolio/BOX/Blinks%20of%20Symmetry%20box.jpg')
    }, function(){
        $('#grid6').attr('src', 'images/portfolio/Blinks%20of%20Symmetry.jpg')
    });


    $('#grid7').hover(function(){
        $('#grid7').attr('src', 'images/portfolio/BOX/The%20Early%20Years%20box.jpg')
    }, function(){
        $('#grid7').attr('src', 'images/portfolio/The%20Early%20Years.jpg')
    });


    $('#grid8').hover(function(){
        $('#grid8').attr('src', 'images/portfolio/BOX/Portrait%20box.jpg')
    }, function(){
        $('#grid8').attr('src', 'images/portfolio/Portrait.jpg')
    });





</script>

</body>

</html>