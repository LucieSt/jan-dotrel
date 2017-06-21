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

        <div class="row">
            <div class="col-md-4">
                <div class="gallery">
                    <a href="images/extracts/1.jpg">Making of</a>
                    <a href="images/extracts/2.jpg"></a>
                    <a href="images/extracts/3.jpg"></a>
                    <a href="images/extracts/4.jpg"></a>
                    <a href="images/extracts/5.jpg"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery">
                    <a href="images/extracts/1.jpg">Kategorie 1</a>
                    <a href="images/extracts/2.jpg"></a>
                    <a href="http://vimeo.com/123123" class="mfp-iframe"></a>
                </div>
            </div>
            <div class="col-md-4">


                <div class="gallery">
                    <a href="images/extracts/1.jpg">Kategorie 2</a>
                    <a href="images/extracts/2.jpg"></a>
                    <a href="http://vimeo.com/123123" class="mfp-iframe"></a>
                </div>

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
            }

        });
    });
</script>

</body>
</html>