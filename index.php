<?php require_once "configs/config.php" ?>
<?php require_once "includes/head.php" ?>
    <!-- BEGIN HEADER -->
    <div class="container">
        <div class="centercolumn">
            <div id="top">
                <div id="logo">
                    <a href="/" id="logo_area">
                        Тиг<span>Строй</span>
                    </a>
                </div>
                <!-- end logop -->
                <div id="topsearch">
                    <form method="post" action="#">
                        <p><input type="text" class="inputbox" value="Поиск"
                                  onblur="if (this.value == ''){this.value = 'Поиск'; }"
                                  onfocus="if (this.value == 'Поиск') {this.value = ''; }"/></p>
                    </form>
                </div><!-- end topsearch -->
            </div><!-- end top -->
            <div class="clr"></div><!-- clear float -->
            <div id="topmenu">
                <div id="navigation">
                    <ul id="nav" class="pull-right">
                        <li><a href="about.html">О НАС</a>

                        </li>
                        <li><a href="services.html">НАШИ УСЛУГИ/ЦЕНЫ</a>
<!--                            <ul>-->
<!--                                <li><a href="/">Home</a></li>-->
<!--                                <li><a href="/">Home Alternate</a></li>-->
<!--                                <li><a href="/">About</a></li>-->
<!--                                <li><a href="/">About</a></li>-->
<!--                                <li><a href="/">About</a></li>-->
<!--                                <li><a href="/">About</a></li>-->
<!--                                <li><a href="/">About</a></li>-->
<!--                            </ul>-->
                        </li>
                        <li><a href="contact.html">КОНТАКТЫ</a></li>
                    </ul>
                </div><!-- end of navigation -->
            </div><!-- end topmenu -->
            <div class="clr"></div><!-- end clear float -->
        </div><!-- end centercolumn -->
    </div><!-- end top container -->
    <!-- END HEADER -->

    <!-- BEGIN CONTENT -->
    <div class="container">
        <div class="centercolumn">
            <div id="featured_container">
                <ul id="main_navi">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
                <div id="featured">
                    <div id="featured_scroll">
                        <div class="scrollable">
                            <div class="items">
                                <div class="item_text">
                                    <h1>Мы выполняем строительные работы по разумным ценам.</h1>
<!--                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>-->
                                </div>
                                <div class="item_image"><img src="<?= IMAGES_PATH ?>/slider/image_1.jpg" alt=""/></div>
                            </div>
                        </div>

                        <div class="scrollable">
                            <div class="items">
                                <div class="item_text">
                                    <h1>
                                        Укладка тротуарной плитки на разныие поверьности: земля, бетон и тд.
                                    </h1>
                                </div>
                                <div class="item_image"><img src="<?= IMAGES_PATH ?>/slider/image_2.jpg" alt=""/></div>
                            </div>
                        </div>

                        <div class="scrollable">
                            <div class="items">
                                <div class="item_text">
                                    <h1>Качественный монтаж сайдинга на стены.</h1>
                                </div>
                                <div class="item_image"><img src="<?= IMAGES_PATH ?>/slider/image_3.jpg" alt=""/></div>
                            </div>
                        </div>

                        <div class="scrollable">
                            <div class="items">
                                <div class="item_text">
                                    <h1>Укладка кафельной, керамиеской плитки любой сложности.</h1>
                                </div>
                                <div class="item_image"><img src="<?= IMAGES_PATH ?>/slider/image_4.jpg" alt=""/></div>
                            </div>
                        </div>

                    </div>
                </div><!-- end of featured -->
            </div><!-- end featured container -->
            <div id="">

                <div id="sideright" class="col-lg-4">
                        <h2>Наши услуги</h2>
                        <div class="navscroll">
                            <a href="#" class="prev_item">Prev</a>
                            <a href="#" class="next_item">Next</a>
                        </div>
                    <div class="ticker">

                        <ul>
                            <li>
                                <img class="" src="<?= IMAGES_PATH ?>/services/image_1.jpg" alt=""/>
                                <p><strong>Перевозка</strong> грузов манипулятором по разумным ценам.</p>
                            </li>
                            <li>
                                <img class="" src="<?= IMAGES_PATH ?>/services/image_2.jpg" alt=""/>
                                <p><strong>Доставка </strong> песка, шебня и других строительних материалов.</p>
                            </li>
                        </ul>

                    </div><!-- end ticker -->

                </div><!-- end sideright -->

                <div id="content" class="col-md-8">
                    <h1 class="tblue title">О нас</h1><br/>

                    <h3 class="title">Добров пожали</h3>

                    <p>Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa et eum facere, in ipsam ipsum iusto magni molestias neque repellat reprehenderit tenetur vitae. Accusantium architecto corporis culpa debitis dolorem dolores eaque enim est et facilis ipsum modi molestiae nam nesciunt nulla obcaecati officiis placeat quaerat quam quo ratione rem, repellat similique soluta tempore ut, voluptatibus.t, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div><!-- end content -->
                <div class="clr"></div><!-- end clear float -->
            </div><!-- end maincontent -->
        </div>
    </div><!-- end content container -->
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
<!--    <div id="bottom_container">-->
<!--        <div class="centercolumn">-->
<!--            <div id="boxslideshow">-->
<!--                <div class="cycle">-->
<!--                    <span class="tbold">Photoworks</span>-->
<!---->
<!--                    <p>Donec adipiscing condimentum dolor eu volutpat. Nulla dolor ligula, aliquet in</p>-->
<!--                </div>-->
<!--                <div class="cycle">-->
<!--                    <span class="tbold">Blitz</span>-->
<!---->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                </div>-->
<!--                <div class="cycle">-->
<!--                    <span class="tbold">Multisoft</span>-->
<!---->
<!--                    <p>Cras condimentum mauris ac elit laoreet faucibus et ut diam. </p>-->
<!--                </div>-->
<!--            </div><!-- end boxslideshow -->
<!--            <div class="clr"></div><!-- end clear float -->
<!--        </div>-->
<!--    </div>-->
    <div class="clr"></div><!-- end clear float -->

<?php require "includes/footer.php" ?>