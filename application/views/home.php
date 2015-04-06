<style type="text/css">
    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }
    #custom-search-input{
        /*padding: 3px;*/
        border: solid 1px #E4E4E4;
        /*border-radius: 6px;*/
        background-color: #fff;
    }

    #custom-search-input input{
        border: 0;
        box-shadow: none;
    }

    #custom-search-input button{
        margin: 2px 0 0 0;
        background: none;
        box-shadow: none;
        border: 0;
        color: #666666;
        padding: 0 8px 0 10px;
        border-left: solid 1px #ccc;
    }

    #custom-search-input button:hover{
        border: 0;
        box-shadow: none;
        border-left: solid 1px #ccc;
    }

    #custom-search-input .glyphicon-search{
        font-size: 23px;
    }
</style>
<div class="panel-body">
    <div class="row">
        <form method="POST" action="Searchc/search">
            <div class="col-lg-12">
                <div class="input-group">
                    <span class="input-group-btn search">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Mechanical</a></li>
                                <li><a href="#">Electrical</a></li>
                                <li><a href="#">Instrumentation</a></li>
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Chemicals</a></li>
                                <li><a href="#">Safety and Security</a></li>
                                <li><a href="#">Storage and Cleaning</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Agriculture</a></li>
                            </ul>
                        </div>
                    </span>
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control " placeholder="What are you looking for?" />
                            <span class="input-group-btn">
                                <button class="btn btn-info " type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <span class="input-group-btn search">
                        <!--<button class="btn btn-default" type="button">ads</button>-->
                        <div class="input-group-btn search-panel1">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept1">Location</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dpmenu" role="menu">
                                <li><a href="#">Manila</a></li>
                                <li><a href="#">Cebu</a></li>
                                <li><a href="#">Cagayan de Oro</a></li>
                            </ul>
                        </div>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </form>
    </div><!-- /.row -->
</div>
<br>
<br>
<!--     </div> --> <!--END PANEL DEFAULT--> 
<div class="row">
    <div class="container">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                </div><!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                </a>                                
                            </div>
                        </div>

                        <div class="col-sm-4" id="carousel-text"></div>

                        <div id="slide-content" style="display: none;">
                            <div id="slide-content-0">
                                <h2>Slider One</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-1">
                                <h2>Slider Two</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-2">
                                <h2>Slider Three</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-3">
                                <h2>Slider Four</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-4">
                                <h2>Slider Five</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-5">
                                <h2>Slider Six</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Slider-->

            <div class="row hidden-xs" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                    </li>


                </ul>                 
            </div>
            <div class="row hidden-xs" id="slider-thumbs">
                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                </li>
                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                </li>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-md-2"></div>
</div>
</div>
<!--       <div id="footer">
        <div class="container">
            <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
        </div>
    </div>-->
</body>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });

    });
    $(document).ready(function(es) {
        $('.search-panel1 .dpmenu').find('a').click(function(es) {
            es.preventDefault();
            var param1 = $(this).attr("href").replace("#", "");
            var concept1 = $(this).text();
            $('.search-panel1 span#search_concept1').text(concept1);
            $('.input-group1 #search_param1').val(param1);
        });
    });
//    $(document).ready(function(es) {
//        $('.search-panel1 .dropdown-menu1').find('a').click(function(es) {
//            es.preventDefault();
////            alert(1);
//            var param1 = $(this).attr("href").replace("#", "");
//            var concept1 = $(this).text();
//            $('.search-panel1 span#search_concept1').text(concept1);
//            $('.input-group1 #search_param1').val(param1);
//        });
//    });
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
    });
</script>
</html>