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
<div class="">

    <hgroup class="mb20">
        <h1>Search Results</h1>
        <div class="row">
            <form method="POST" action="<?php echo site_url("Searchc/search"); ?>">
                <div class="col-lg-12">
                    <div class="input-group">
                        <span class="input-group-btn search">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Filter by</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" name="search_category">
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
                                <input type="text" class="form-control " name="search_item" placeholder="What are you looking for?" />
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
                                <ul class="dropdown-menu dpmenu" role="menu" name="search_region">
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
        <h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
    </hgroup>
    <section class="col-xs-12 col-sm-6 col-md-12">
        <article class="search-result row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                    <li><i class="glyphicon glyphicon-calendar"></i> <span>02/15/2014</span></li>
                    <li><i class="glyphicon glyphicon-time"></i> <span>4:28 pm</span></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <span>People</span></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
            </div>
            <span class="clearfix borda"></span>
        </article>

        <article class="search-result row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/food" alt="Lorem ipsum" /></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                    <li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
                    <li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
            </div>
            <span class="clearfix borda"></span>
        </article>

        <article class="search-result row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/sports" alt="Lorem ipsum" /></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                    <li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
                    <li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
            </div>
            <span class="clearfix border"></span>
        </article>			

    </section>
</div>


<script type="text/javascript">
    $(document).ready(function (e) {
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });

    });
    $(document).ready(function (es) {
        $('.search-panel1 .dpmenu').find('a').click(function (es) {
            es.preventDefault();
            var param1 = $(this).attr("href").replace("#", "");
            var concept1 = $(this).text();
            $('.search-panel1 span#search_concept1').text(concept1);
            $('.input-group1 #search_param1').val(param1);
        });
    });
</script>