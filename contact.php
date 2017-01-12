<!DOCTYPE html>
<html>
<head>
    <title>Newscamp新英格兰学生冬令营</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========= Include All CSS =========-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.css"/>
    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="js/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
    <link rel="stylesheet" type="text/css" href="css/rticons.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/js-image-slider.css"/>
    <link rel="stylesheet" type="text/css" href="css/preset.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>


    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="js/SliderRevolution/css/settings.css"/>

    <!-- Favicon Icon -->
    <!--<link rel="icon"  type="image/png" href="images/favicon.png">-->
    <!-- Favicon Icon -->

</head>
<body>

<!-- End Color Preset -->
<!--================= Box Div Start ==================-->
<div class="boxWrapper">
    <!--================= Box Div Start ==================-->
    <!-- Header Area -->
    <?php include 'sub/menu.php';?>


<!--    <!-- Breadcrumb Section -->-->
<!--    <section class="breadCrumArea">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">-->
<!--                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><span>联系我们</span></h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!--Address-->
    <section id="AddressArea" class="introArea commonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">
                    <div class="singleTesti wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <h2>营会地址</h2>
                        <p>195 Cloverdale Street , Pittsfield, MA 01201</p>
                    </div>
                    <div class="quote wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <p class="quotation">
                            位于麻州，纽约州边境 Birkshire 山区的<a href="http://www.lakesideonline.org/">Lakeside Christian Camp and Conference Center</a>; <br>
                            坐拥秀丽的湖光山色， <a href="http://www.lakesideonline.org/our-facilities/">营地设施</a>完善齐全;<br>
                            距离新英格兰区的大城市(Boston; Worcester, MA; Springfield, MA; Hartford, CT) 1小时左右车程， 是举办退修会的好地方;<br>
                            喜欢滑雪的朋友，离 Lakeside Camp 约 17 里外的 Jiminy Peak 是新英格兰区南部最大的滑雪场。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="mapArea" class="mapArea wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
        <div id="map">

        </div>
    </section>


    <!-- Footer Section -->
    <?php include "sub/footer.php"; ?>
    

    <!--================= Box Div End ==================-->
</div>
<!--================= Box Div End ==================-->
<!--================= Back To Top ==================-->
<a href="#" id="backto"><img src="images/backto.png" alt=""></a>

<!--======== Include All JS ========-->
<!-- jQuery -->
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="js/SliderRevolution/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/SliderRevolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/mixer.js"></script>
<script type="text/javascript" src="js/appear.js"></script>
<script type="text/javascript" src="js/circle-progress.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/directionHover.js"></script>
<script type="text/javascript" src="js/js-image-slider.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSAeFpht7ToRHsl-jsDIStGTqETFiBuGU&signed_in=true&callback=initMap" async defer></script>
<script>
    function initMap() {
        var center = {lat: 42.425125, lng: -73.315421};
        var map = new google.maps.Map(document.getElementById('map'), {
            scrollwheel: false,
            zoom: 8,
            center: center
        });

        // Construct a new InfoWindow.
        var address = '<br><h5>Newscamp 营会地点</h5><br><b><a href="http://www.lakesideonline.org/" >Lakeside Christian Camp and Conference Center</a></b>' +
                '<p style="color:black">195 Cloverdale Street , Pittsfield, MA 01201</p><br>';

        var infoWindow = new google.maps.InfoWindow({
            content: address
        });

        var marker = new google.maps.Marker({
            map: map,
            // Define the place with a location, and a query string.
            place: {
                location: {lat: 42.425125, lng: -73.315421},
                query: 'Lakeside Christian Camp and Conference Center, MA, USA'

            },
            // Attributions help users find your site again.
            attribution: {
                source: 'Newscamp',
                webUrl: 'https://www.newscamp.org/contact.html'
            }
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });
        // default open
        infoWindow.open(map, marker);
    }

</script>

<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
</body>
</html>
