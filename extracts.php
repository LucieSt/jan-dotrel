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

        <div class="row extracts">
            <div class="col-md-4">
                <div class="gallery">

                    <a href="https://vimeo.com/222125279" class="mfp-iframe">
                        <img src="images/extracts/small/Video%20Vteriny%20symetrie.jpg" class="portfolio-image" id="extra1">
                    </a>

                </div>
                <span class="extracts-title">VIDEO / VTEŘINY SYMETRIE</span>
            </div>
            <div class="col-md-4">
                <div class="gallery">
                    <a href="images/extracts/1.jpg">
                        <img src="images/extracts/small/Video%20Grid.jpg" class="portfolio-image" id="extra2">
                    </a>
                    <a href="images/extracts/2.jpg"></a>
                    <a href="http://vimeo.com/123123" class="mfp-iframe"></a>
                </div>
                <span class="extracts-title">VIDEO / GRID</span>
            </div>

            <div class="col-md-4">


                <div class="gallery">
                    <a href="images/extracts/1.jpg">
                        <img src="images/extracts/small/Making%20of.jpg" class="portfolio-image" id="extra3">
                    </a>
                    <a href="images/extracts/2.jpg"></a>
                    <a href="images/extracts/3.jpg"></a>
                    <a href="images/extracts/4.jpg"></a>
                    <a href="images/extracts/5.jpg"></a>
                    <a href="images/extracts/6.jpg"></a>
                </div>
                <span class="extracts-title">MAKING OF</span>
            </div>

        </div>

</div>

<script>
    $('.gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            image: {
                cursor: null
            },
            preload: [1,1]
        });
    });

    $('#extra1').hover(function(){
        $('#extra1').attr('src', 'images/extracts/small/Video%20Vteriny%20symetrie%20Box.jpg')
    }, function(){
        $('#extra1').attr('src', 'images/extracts/small/Video%20Vteriny%20symetrie.jpg')
    });

    $('#extra2').hover(function(){
        $('#extra2').attr('src', 'images/extracts/small/Video%20Grid%20Box.jpg')
    }, function(){
        $('#extra2').attr('src', 'images/extracts/small/Video%20Grid.jpg')
    });

    $('#extra3').hover(function(){
        $('#extra3').attr('src', 'images/extracts/small/Making%20of%20Box.jpg')
    }, function(){
        $('#extra3').attr('src', 'images/extracts/small/Making%20of.jpg')
    });







</script>

</body>
</html>