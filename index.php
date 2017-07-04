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

        <div id="homepage-carousel" class="carousel" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/homepage/small/%201%20Lysis%20(Dekompozice).jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/small/Grid%206.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/small/4%20Portret%20pro%20Eadwearda%20Muybridge.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/small/3%20Portret%20pro%20Francise%20Bacona.jpg" class="homepage-image">
                </div>
                <div class="item">
                    <img src="images/homepage/small/2%20Spherical%20Gas%20Tank.jpg" class="homepage-image">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#homepage-carousel').carousel({
        interval: 4000,
        pause: "false"
    })
</script>

</body>
</html>