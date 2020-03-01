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
                    <img src="images/text/01-min.jpg" class="portfolio-image text1">
                    <span class="extracts-title">JOZEF MRVA ML. / DEEPLY ORDERED CHAOS</span>                    
                </a>
            </div>

            <div class="col-md-4">
                <a href="text2">
                    <img src="images/text/02-min.jpg" class="portfolio-image text2">
                    <span class="extracts-title">MIROSLAV PETŘÍČEK / VTEŘINY SYMETRIE</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="text3">
                    <img src="images/text/03-min.jpg" class="portfolio-image text3">
                    <span class="extracts-title">JAN DOTŘEL / GRID</span>
                </a>
            </div>
        </div>
    </div>
</div>



<script>

    $('.text1').hover(function(){
        $('.text1').attr('src', 'images/text/01-box-min.jpg')
    }, function(){
        $('.text1').attr('src', 'images/text/01-min.jpg')
    });

    $('.text2').hover(function(){
        $('.text2').attr('src', 'images/text/02-box-min.jpg')
    }, function(){
        $('.text2').attr('src', 'images/text/02-min.jpg')
    });

     $('.text3').hover(function(){
        $('.text3').attr('src', 'images/text/03-box-min.jpg')
    }, function(){
        $('.text3').attr('src', 'images/text/03-min.jpg')
    });

</script>


</body>
</html>