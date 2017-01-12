<!DOCTYPE html>
<html>
<head>
    <title>TopBiz - Responsive Corporate HTML5 Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include All CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
    <link rel="stylesheet" type="text/css" href="css/rticons.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/js-image-slider.css"/>
    <link rel="stylesheet" type="text/css" href="css/preset.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link id="layout" rel="stylesheet" type="text/css" href="css/colorpreset/wide.css"/>
    <link id="colorChem" rel="stylesheet" type="text/css" href="css/colorpreset/light.css"/>
    <link id="colorsSet" rel="stylesheet" type="text/css" href="css/colorpreset/color1.css"/>

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="images/favicon.png">
    <!-- Favicon Icon -->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<!-- Start Loader -->
<!--<div class="loaderWrap">-->
    <!--<div id='loader'>-->
        <!--<div class='diamond'></div>-->
        <!--<div class='diamond'></div>-->
        <!--<div class='diamond'></div>-->
    <!--</div>-->
<!--</div>-->
<!-- End Loader -->
<!-- Start Color Preset -->
<div class="presetArea">
    <div class="switch">
        <h5>Style <span>Selector</span></h5>
        <a href="#" id="switches"><i class="icon-cog-outline"></i></a>
    </div>
    <div class="accentColor">
        <p class="psTitle">Choose accent color:</p>
        <a href="color1" class="active color1"></a>
        <a href="color2" class="color2"></a>
        <a href="color3" class="color3"></a>
        <a href="color4" class="color4"></a>
        <a href="color5" class="color5 noMarginRight"></a>
        <a href="color6" class="color6"></a>
        <a href="color7" class="color7"></a>
        <a href="color8" class="color8"></a>
        <a href="color9" class="color9"></a>
        <a href="color10" class="color10 noMarginRight"></a>
    </div>
    <div class="colorChem">
        <p class="psTitle">Choose color scheme:</p>
        <a class="light active" href="light">Light</a>
        <a class="dark" href="dark">Dark</a>
    </div>
    <div class="layoutstyle">
        <p class="psTitle">Choose layout style:</p>
        <a class="layouta wide active" href="wide">
            <img class="normalLay" src="images/preset/lay1.png" alt="">
            <img class="hoverLay" src="images/preset/lay1h.png" alt="">
            <span>Wide</span>
        </a>
        <a id="boxLayout" class="layouta box" href="box">
            <img class="normalLay" src="images/preset/lay2.png" alt="">
            <img class="hoverLay" src="images/preset/lay2h.png" alt="">
            <span>Box</span>
        </a>
    </div>
    <div class="patterns">
        <p class="psTitle">Choose pattern:</p>
        <a href="bgOne" class="active bg1"></a>
        <a href="bgTwo" class="bg2"></a>
        <a href="bgThree" class="bg3"></a>
        <a href="bgFour" class="bg4"></a>
        <a href="bgFive" class="bg5"></a>
    </div>
</div>
<!-- End Color Preset -->
<!--================= Box Div Start ==================-->
<div class="boxWrapper">
    <!--================= Box Div Start ==================-->
    <!-- Header Area -->
    <header class="headerArea">
        <div class="logo pull-left">
            <div class="logoImg">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <h2><a href="index.php">top<span>biz</span></a></h2>
        </div>
        <nav class="mainMenu pull-left">
            <div class="menuButton hidden-lg hidden-md">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li class="hasChild"><a href="index.php">Home</a>
                    <ul class="dropMenu">
                        <li><a href="index.php">Home One</a></li>
                        <li><a href="index2.html">Home Two</a></li>
                        <li><a href="index3.html">Home Three</a></li>
                        <li><a href="index4.html">Home Four</a></li>
                        <li><a href="dark.html">Dark Version</a></li>
                        <li><a href="box.html">Box Version</a></li>
                    </ul>
                </li>
                <li class="hasChild"><a href="folio1.html">Gallery</a>
                    <ul class="dropMenu">
                        <li><a href="folio1.html">Folio 1</a></li>
                        <li><a href="folio2.html">Folio 2</a></li>
                        <li><a href="folio3.html">Folio 3</a></li>
                        <li><a href="folioSingle.html">Folio Single</a></li>
                    </ul>
                </li>
                <li class="active hasChild"><a href="blogGrid.html">Blog</a>
                    <ul class="dropMenu">
                        <li><a href="blogGrid.html">Blog Grid</a></li>
                        <li><a href="blogSidebar.html">Blog Sidebar</a></li>
                        <li><a href="blogSingle.php">Blog Single</a></li>
                    </ul>
                </li>
                <li class="hasChild"><a href="#">Pages</a>
                    <ul class="dropMenu">
                        <li><a href="member.html">member</a></li>
                        <li><a href="404.html">404</a></li>
                        <li class="hasChild"><a href="event.html">event</a>
                            <ul class="dropSub">
                                <li><a href="event.html">Event</a></li>
                                <li><a href="eventSingle.html">Event Single</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="about.html">about</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="topSocial pull-right">
            <ul>
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="google" href="#"><i class="fa fa-google"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </header>
    <!-- Breadcrumb Section -->
    <section class="breadCrumArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">blog <span>post</span></h1>
                    <ul class="breadLink wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                        <li><a href="#">home</a><span>|</span></li>
                        <li><a href="#">blog</a><span>|</span></li>
                        <li>blog post</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Post Page Section -->
    <section class="blogSidebarArea commonSection postPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="blogSidbarPost">
                        <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><a href="blogSingle.php">Post with large image</a></h2>
                        <p class="blogAuthor wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">by <a href="#">Samantha Lane</a></p>
                        <ul class="blogCategory wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <li><i class="icon-calendar3"></i><a href="blogSingle.php">15.10.2014</a></li>
                            <li class="categorys"><i class="icon-pen2"></i><span>Posted in</span> <a href="blogSingle.php">Web design</a>, <a href="blogSingle.php"> Media</a></li>
                            <li><i class="icon-bubble"></i> <a href="blogSingle.php">3 comments</a></li>
                        </ul>
                        <div class="blogPostThumb wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                            <img alt="" src="images/blogSingle/thumb1.jpg">
                        </div>
                        <div class="blogPostContent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <h5>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </h5>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dictasunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugitsed quia consequuntur magni dolores
                                eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <p>
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                consectetur, adipisci velit, sed quia non numquam eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                                ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                                commodi consequatur quis autem vel eum iure reprehenderit qui
                                in ea voluptate velit esse quam nihil molestiae consequatur, vel
                                illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                            </p>
                        </div>
                    </div>
                    <div class="quote">
                        <p class="quotation">
                            Lorem ipsum dolor siamet consetetur sadipscing elised diam nonumy
                            eirmod tempor inviduntut labore et dolore magna aliquyam erat.
                        </p>
                        <p class="name">-  <span>Jason</span> Willis  -</p>
                    </div>
                    <div class="blogSidbarPost">
                        <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><a href="blogSingle.php">Post with Small image</a></h2>
                        <p class="blogAuthor wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">by <a href="#">Samantha Lane</a></p>
                        <ul class="blogCategory wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                            <li><i class="icon-calendar3"></i><a href="blogSingle.php">15.10.2014</a></li>
                            <li class="categorys"><i class="icon-pen2"></i><span>Posted in</span> <a href="blogSingle.php">Web design</a>, <a href="blogSingle.php"> Media</a></li>
                            <li><i class="icon-bubble"></i> <a href="blogSingle.php">3 comments</a></li>
                        </ul>
                        <div class="leftImgPost wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="leftImg">
                                <img src="images/blogSingle/leftThumb.jpg" alt="">
                            </div>
                            <div class="leftPost">
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    q blanditiis praesentium voluptatum deleniti atque corrupti
                                    quos dolores quas molestias excepturi sint occaecati
                                    cupiditate non provident, similique harum quidem rerum
                                    facilis est et expedita distinctio. Nam libero tempore,
                                    cum soluta nobis est eligendi optio cumque nihil impedit
                                    quo minus.
                                </p>
                                <p>
                                    Quod maxime placeat facere possimus, omnis voluptas
                                    assumenda est, omnis dolor repellendus. Temporibus autem
                                    quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae
                                    non recusandae. Itaque earum rerum hic tenetur a sapiente
                                    delectus, ut aut reiciendis voluptatibus.
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="authorInfo wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="authImg">
                            <img src="images/blogSingle/author.jpg" alt="">
                        </div>
                        <div class="authorDesc">
                            <h3>Mary Jameson</h3>
                            <h6>Manager, Google</h6>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                dolores quas molestias excepturi.
                            </p>
                            <div class="topSocial text-left">
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="commentsSection wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <h1>Comments</h1>
                        <ol>
                            <li>
                                <div class="commentWrap">
                                    <div class="commenterImg">
                                        <img src="images/blogSingle/comment1.jpg" alt="">
                                    </div>
                                    <div class="fullComment">
                                        <div class="commentMeta">
                                            <p class="pull-left">Abu Stanley, October 15, 2014</p>
                                            <a class="pull-right" href="#">reply</a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus
                                            qui blanditiis praesentium voluptatum deleniti atque
                                            corrupti quos dolores quas molestias excepturi.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="commentWrap">
                                            <div class="commenterImg">
                                                <img src="images/blogSingle/comment2.jpg" alt="">
                                            </div>
                                            <div class="fullComment">
                                                <div class="commentMeta">
                                                    <p class="pull-left">May, October 15, 2014</p>
                                                    <a class="pull-right" href="#">reply</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <p>
                                                    At vero eos et accusamus et iusto odio dignisimos ducimus qui blanditiis
                                                    praesentium deleniti atque quos dolores quas molestias
                                                    excepturi.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="commentWrap">
                                                    <div class="commenterImg">
                                                        <img src="images/blogSingle/comment3.jpg" alt="">
                                                    </div>
                                                    <div class="fullComment">
                                                        <div class="commentMeta">
                                                            <p class="pull-left">Mart Jameson, October 15, 2014</p>
                                                            <a class="pull-right" href="#">reply</a>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <p>
                                                            At vero eos et accusamus et iusto odio
                                                            dignissimos ducimus quiditiis praesentium
                                                            voluptatum deleniti atque.
                                                        </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="commentWrap">
                                    <div class="commenterImg">
                                        <img src="images/blogSingle/comment4.jpg" alt="">
                                    </div>
                                    <div class="fullComment">
                                        <div class="commentMeta">
                                            <p class="pull-left">Abu Stanley, October 15, 2014</p>
                                            <a class="pull-right" href="#">reply</a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus
                                            qui blanditiis praesentium voluptatum deleniti atque
                                            corrupti quos dolores quas molestias excepturi.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="commentWrap">
                                            <div class="commenterImg">
                                                <img src="images/blogSingle/comment5.jpg" alt="">
                                            </div>
                                            <div class="fullComment">
                                                <div class="commentMeta">
                                                    <p class="pull-left">May, October 15, 2014</p>
                                                    <a class="pull-right" href="#">reply</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <p>
                                                    At vero eos et accusamus iusto odio dignissimos ducimus
                                                    blanditiis praesentium deleniti atque
                                                    corrupti quos dolores quas molestias excepturi.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="commentForm wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <h1>Leave Comment</h1>
                        <form action="#" method="post">
                            <input type="text" placeholder="Full name">
                            <input type="email" placeholder="Email address">
                            <div class="clearfix"></div>
                            <textarea placeholder="Message"></textarea>
                            <button type="submit">Leave a comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <h4 class="widgetTitle">Text</h4>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae abo inventore veritatis equasi architecto.
                            </p>
                        </aside>
                        <aside class="widget tags wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <h4 class="widgetTitle">Tags</h4>
                            <a class="active" href="blogSingle.php">All</a>
                            <a href="blogSingle.php" class="tags">Web Design</a>
                            <a href="blogSingle.php" class="tags">Branding</a>
                            <a href="blogSingle.php" class="tags">Media</a>
                            <a href="blogSingle.php" class="tags">Photography</a>
                            <a href="blogSingle.php" class="tags">Print</a>
                            <a href="blogSingle.php" class="tags">Marketing</a>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <form action="#" class="widgetForm">
                                <input type="text" name="search" placeholder="Search...">
                                <button type="submit"><i class="icon-search3"></i></button>
                                <div class="clearfix"></div>
                            </form>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <h4 class="widgetTitle">Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Print</a></li>
                            </ul>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <h4 class="widgetTitle">Most popular</h4>
                            <div class="sidePost">
                                <div class="sidePostImg">
                                    <img src="images/blogSidebar/widget1.jpg" alt="">
                                </div>
                                <div class="sidePostCont">
                                    <a href="blogSingle.php">november 3, 2014</a>
                                    <p><a href="blogSingle.php">Stet clita kasd gubergren no takimata sanctus.</a></p>
                                </div>
                            </div>
                            <div class="sidePost">
                                <div class="sidePostImg">
                                    <img src="images/blogSidebar/widget2.jpg" alt="">
                                </div>
                                <div class="sidePostCont">
                                    <a href="blogSingle.php">october 29, 2014</a>
                                    <p><a href="blogSingle.php">Lorem ipsum dolor amet consetetur.</a></p>
                                </div>
                            </div>
                            <div class="sidePost">
                                <div class="sidePostImg">
                                    <img src="images/blogSidebar/widget3.jpg" alt="">
                                </div>
                                <div class="sidePostCont">
                                    <a href="blogSingle.php">october 13, 2014</a>
                                    <p><a href="blogSingle.php">Sadipscing elitr, sed diam nonumy eirmod.</a></p>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                            <div class="calendarWidget">
                                <table>
                                    <caption>November '14</caption>
                                    <tbody><tr>
                                        <th>M</th>
                                        <th>t</th>
                                        <th>w</th>
                                        <th>t</th>
                                        <th>f</th>
                                        <th>s</th>
                                        <th>s</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td class="active">14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                    </tr>
                                    </tbody></table>
                                <div class="calendarButton">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section -->
    <section class="subscribeArea">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="subsForm">
                        <h4 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Sign up to <span>our newsletter</span></h4>
                        <form action="#" id="subscribeForm" method="post" class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                            <input type="email" name="sub_email" id="subs_email">
                            <button type="submit"><i class="icon-pen2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
    <footer class="footerArea">
        <section class="footerTop commonSection">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                        <div class="footerContent">
                            <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">8 (800) 695-2684</h2>
                            <a class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms" href="mailto:info@topbiz.com">info@topbiz.com</a>
                            <p class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">Santa Monica Blvd, Los Angeles, CA 97845, US</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyRight">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <p>Copyright &copy; 2015 by <a href="http://themewar.com">ThemeWar</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--================= Box Div End ==================-->
</div>
<!--================= Box Div End ==================-->
<!--================= Back To Top ==================-->
<a href="#" id="backto"><img src="images/backto.png" alt=""></a>
<!-- Include All JS -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/mixer.js"></script>
<script type="text/javascript" src="js/appear.js"></script>
<script type="text/javascript" src="js/circle-progress.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/directionHover.js"></script>
<script type="text/javascript" src="js/js-image-slider.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
</body>
</html>
