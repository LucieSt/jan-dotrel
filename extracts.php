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
    <div class="content-container extracts-container">

        <div class="row extracts">
            <div class="col-md-4">
                <div class="gallery">
                    <a href="https://www.youtube.com/watch?v=Ie12_t7qRKM" class="mfp-iframe" autoplay="1">
                        <img src="images/extracts/boxes/01.jpg" class="portfolio-image" id="extra1">
                    </a>
                </div>
                <span class="extracts-title">OTHER WORLDS</span>
            </div>

            <div class="col-md-4">
                <div class="gallery">
                    <a href="https://www.youtube.com/watch?v=FXgFy8M0jwc" class="mfp-iframe" autoplay="1">
                        <img src="images/extracts/boxes/02.jpg" class="portfolio-image" id="extra2">
                    </a>
                </div>
                <span class="extracts-title">DEEPLY ORDERED CHAOS</span>
            </div>

            <div class="col-md-4">
                <div class="gallery">
                    <a href="https://www.youtube.com/watch?v=WPmBlTzymzk" class="mfp-iframe" autoplay="1">
                        <img src="images/extracts/boxes/03.jpg" class="portfolio-image" id="extra3">
                    </a>
                </div>
                <span class="extracts-title">VTEŘINY SYMETRIE</span>
            </div>

            <!-- <div class="col-md-4">

                <div class="gallery">
                    <a href="images/extracts/thumbs/01.jpg">
                        <img src="images/extracts/boxes/03.jpg" class="portfolio-image" id="extra3">
                    </a>
                    <a href="images/extracts/thumbs/02.jpg"></a>
                    <a href="images/extracts/thumbs/03.jpg"></a>
                    <a href="images/extracts/thumbs/04.jpg"></a>
                    <a href="images/extracts/thumbs/05.jpg"></a>
                    <a href="images/extracts/thumbs/06.jpg"></a>
                    <a href="images/extracts/thumbs/07.jpg"></a>
                    <a href="images/extracts/thumbs/08.jpg"></a>
                </div>
                <span class="extracts-title">MAKING OF</span>
            </div> -->

        </div>

    </div>



    <div id="test-popup" class="white-popup mfp-hide">
       <span>video pro Vás připravujeme...</span>
    </div>

<script>
    $(window).on('hashchange',function() {

        if(location.href.indexOf("#gal")<0) {

            $.magnificPopup.close();
        }
    });
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
            preload: [2,2],
            callbacks: {
                open: function() {
                    location.href = location.href.split('#')[0] + "#gal";
                }
                ,close: function() {
                    if (location.hash) history.go(-1);
                }
            }
        });
    });

    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });

    if ($(window).width() < 700) {
        $('#extra1').attr('src', 'images/extracts/boxes/01_box.jpg')
        $('#extra2').attr('src', 'images/extracts/boxes/02_box.jpg')
        $('#extra3').attr('src', 'images/extracts/boxes/03_box.jpg')
    }
    else {
        $('#extra1').hover(function(){
            $('#extra1').attr('src', 'images/extracts/boxes/01_box.jpg')
        }, function(){
            $('#extra1').attr('src', 'images/extracts/boxes/01.jpg')
        });

        $('#extra2').hover(function(){
            $('#extra2').attr('src', 'images/extracts/boxes/02_box.jpg')
        }, function(){
            $('#extra2').attr('src', 'images/extracts/boxes/02.jpg')
        });

        $('#extra3').hover(function(){
            $('#extra3').attr('src', 'images/extracts/boxes/03_box.jpg')
        }, function(){
            $('#extra3').attr('src', 'images/extracts/boxes/03.jpg')
        });
    }

</script>

<script src="script.js"></script>

</body>
</html>