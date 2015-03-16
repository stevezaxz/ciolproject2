<!--<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                            <div class="navbar-header">    

                                <a href="" class="navbar-brand">Bootstrap</a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="">Register Now!</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>-->
<!-- <div class="panel panel-default"> -->
<div class="panel-body">
    <!--<label class="col-lg-2">Category</label>-->
    <div class="row">

        <div class="col-lg-12">
            <div class="input-group">

                <span class="input-group-btn">
                    <!--<button class="btn btn-default" type="button">Go</button>-->
                    <!--                    <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Product Category
                                                <span class="caret"></span>
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
                                        </div>-->
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
                <input type="text" class="form-control" placeholder="What are you looking for?">
                <span class="input-group-btn">
                    <!--<button class="btn btn-default" type="button">Go</button>-->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Location
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Manila</a></li>
                            <li><a href="#">Cebu</a></li>
                            <li><a href="#">Cagayan de Oro</a></li>
                        </ul>

                    </div>
<!--                                        <div class="input-group-btn search-panel1">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span id="search_concept1">Filter by</span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu1" role="menu">
                                                <li><a href="#">Mechanical</a></li>
                                                <li><a href="#">Electrical</a></li>
                                                <li><a href="#">Instrumentation</a></li>
                    
                                            </ul>
                                        </div>-->


                    <!--                    <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-group-sm btn-info">
                                                Search
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                    
                    
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Manila</a></li>
                                                <li><a href="#">Cebu</a></li>
                                                <li><a href="#">Cagayan de Oro</a></li>
                                            </ul>
                    
                                        </div>-->

<!--                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>-->


                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
</div>

<br>
<br>

<!--     </div> --> <!--END PANEL DEFAULT--> 
<div class="col-md-7">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url('public/1.jpg'); ?>"  alt="Chania">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url('public/2.jpg'); ?>"alt="Chania">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url('public/3.jpg'); ?>"  alt="Flower">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url('public/4.jpg'); ?>"  alt="Flower">
                <div class="carousel-caption">
                    <h3>Flowers</h3>
                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-md-5">
    <img src="<?php echo base_url('public/cisco1.png'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">
    <img src="<?php echo base_url('public/hp.jpg'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">
    <img src="<?php echo base_url('public/apple.jpg'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">
    <img src="<?php echo base_url('public/steag.gif'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">
    <img src="<?php echo base_url('public/ibm.jpg'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">
    <img src="<?php echo base_url('public/e.jpg'); ?>" class="img-thumbnail" alt="Thumbnail Image" width="100px" height="100px">

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
//    $(document).ready(function(es) {
//        $('.search-panel1 .dropdown-menu1').find('a').click(function(es) {
//            es.preventDefault();
//            var param1 = $(this).attr("href").replace("#", "");
//            var concept1 = $(this).text();
//            $('.search-panel1 span#search_concept1').text(concept1);
//            $('.input-group1 #search_param1').val(param1);
//        });
//    });
</script>
</html>