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

    <div class="content-container">

        <div id="homepage-carousel" class="carousel fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active" id="white" >
                    <img src="images/homepage/thumbs/mobil/00M.jpg" class="homepage-image" id="hp-00">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/mobil/01M.jpg" class="homepage-image" id="hp-01">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/mobil/02M.jpg" class="homepage-image" id="hp-02">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/mobil/01M" class="homepage-image" id="hp-03">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/mobil/02M.jpg" class="homepage-image" id="hp-04">
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    if ($(window).width() > 701) {
        $('#hp-00').attr('src', 'images/homepage/thumbs/00.jpg')
        $('#hp-01').attr('src', 'images/homepage/thumbs/01.jpg')
        $('#hp-02').attr('src', 'images/homepage/thumbs/02.jpg')
        $('#hp-03').attr('src', 'images/homepage/thumbs/03.jpg')
        $('#hp-04').attr('src', 'images/homepage/thumbs/04.jpg')
    }

    $('#homepage-carousel').carousel({
        interval: 7000,
        pause: "false"
    });

    setTimeout(function(){
        $('#white').remove();
    }, 5000);


    setTimeout(function(){
        $('#homepage-carousel').carousel("next");

    }, 100);
</script>

<script src="script.js"></script>

</body>
</html>