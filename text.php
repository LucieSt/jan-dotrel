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

        <div class="row texts">
            <div class="col-md-4">
                <a href="text1">
                    <img src="images/text/thumbs/01.jpg" class="portfolio-image text1">
                    <span class="extracts-title">MIROSLAV PETŘÍČEK / VTEŘINY SYMETRIE</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="text2">
                    <img src="images/text/thumbs/02.jpg" class="portfolio-image text2">
                    <span class="extracts-title">DEEPLY ORDERED CHAOS</span>
                </a>
            </div>
        </div>
    </div>
</div>



<script>

    $('.text1').hover(function(){
        $('.text1').attr('src', 'images/text/thumbs/01_box.jpg')
    }, function(){
        $('.text1').attr('src', 'images/text/thumbs/01.jpg')
    });

    $('.text2').hover(function(){
        $('.text2').attr('src', 'images/text/thumbs/02_box.jpg')
    }, function(){
        $('.text2').attr('src', 'images/text/thumbs/02.jpg')
    });

</script>

<script src="script.js"></script>

</body>
</html>