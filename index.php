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
                    <img src="images/homepage/thumbs/00.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/01.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/02.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/03.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/thumbs/04.jpg" class="homepage-image">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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

</body>
</html>