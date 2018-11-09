<?php
    require 'serverCon.php';
    $query = "SELECT * FROM tutors";
    $result=mysqli_query($link,$query);
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/wikiAssets/index.css">
  <link rel="stylesheet" href="assets/wikiAssets/myWiki_icons.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style type="text/css">
   
    .tags {
  list-style: none;
  margin: 0;
  overflow: hidden; 
  padding: 0;
}

.tags li {
  float: left; 
}

.tag {
  background: #c1cbcc;
  color: #6a7fa3;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 5px 0 5px;
  position: relative;
  margin: 0 5px 5px 0;
  text-decoration: none;
  border-radius: 5px;
}

.tag:hover{
  opacity: .75;
  cursor: pointer;
}

    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 50%;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,600);
.snip1336 {
  font-family: 'Roboto', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: left;
  line-height: 1.4em;
  background-color: #141414;
}
.snip1336 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1336 img {
  max-width: 100%;
  top: 5%;
  vertical-align: top;
  opacity: 0.85;
}
.gh{
    height: 80px;
    
}
.snip1336 figcaption {
  width: 100%;
  background-color: #141414;
  padding: 25px;
  position: relative;
}
.snip1336 figcaption:before {
  position: absolute;
  content: '';
  bottom: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 55px 0 0 400px;
  border-color: transparent transparent transparent #141414;
}
.snip1336 figcaption a {
  padding: 5px;
  border: 1px solid #ffffff;
  color: #ffffff;
  font-size: 0.7em;
  text-transform: uppercase;
  margin: 10px 0;
  display: inline-block;
  opacity: 0.65;
  width: 47%;
  text-align: center;
  text-decoration: none;
  font-weight: 600;
  letter-spacing: 1px;
}
.snip1336 figcaption a:hover {
  opacity: 1;
}
.snip1336 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 100%;
  left: 35%;
  
  z-index: 1;
  max-width: 90px;
  opacity: 1;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}
.snip1336 .follow {
  margin-right: 4%;
  border-color: #2980b9;
  color: #2980b9;
}
.snip1336 h2 {
 
 
  font-weight: 300;
  float: left;
  margin-top: 50px;
  
}
.sn {
 
 
  font-weight: 300;
  right: 50px;
 
  
}
.snip1336 p {
  margin: 0 0 10px;
  font-size: 0.8em;
  letter-spacing: 1px;
  opacity: 0.8;
}
/* Demo purposes only */

div#chatlist {
    width: 100%;
    height: 500px;
    border: 1px solid black;
}
div.mousescroll {
    overflow: hidden;
}
div.mousescroll:hover {
    overflow-y: scroll;
}
ul {
    list-style-type: none;
}
.slimScrollDiv { border: 1px solid #ccc; margin:10px; }

/* for user image*/
.img-round {
  position: relative;
  width:50px;
  height: 50px;
  overflow: hidden;
  border-radius: 50%;

  > img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

</style>
  
</head>
<body>
<section class="menu cid-qBZdT3LhKQ" once="menu" id="menu1-j" data-rv-view="32">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#top">myWiki</a></span>
            </div>
        </div>
        <div class="search-box" >
            <input class="in" type="text" autocomplete="off" placeholder="Search Tutor by class" />
        <div class="result">
            
        </div>
    </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#top">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                    </a>
                </li>
               <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="addStudent.html">
                        <span class="mbri-plus mbr-iconfont mbr-iconfont-btn"> Add Tutor</span>
                       
                    </a>
                </li>
             <!--   <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="editList.html">
                        <span class="mbri-update mbr-iconfont mbr-iconfont-btn">Update</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="">
                        <span class="mbri-update mbr-iconfont mbr-iconfont-btn">Delete</span>
                    </a>
                </li>-->

            </ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href=""></a></section>

<section class="testimonials4 cid-qBZdXqJIbp" id="testimonials4-k" data-rv-view="34">
  <div class="container">
    
    
    <div class="col-md-12 testimonials-container"> 
      

    <?php
		while($row=mysqli_fetch_array($result))
		{
                    $id= $row['id'];
                    $subQuery = "SELECT * FROM tutors WHERE id = $id";
                    $subResult=mysqli_query($link,$subQuery);
                    $subRow= mysqli_fetch_array($subResult);
                    $arr = $subRow['class'];
                    $arrResult=explode(',',$arr);
                    $subQuery2 = "SELECT * FROM tutors WHERE id = $id";
                    $subResult2=mysqli_query($link,$subQuery);
                    $subRow2= mysqli_fetch_array($subResult);
                    $arr2 = $subRow['sub'];
                    $arrResult2=explode(',',$arr2);

            ?>
    <div class="testimonials-item">
                <div class=" card " style="background-color: white;">
            <div class="card-header">
              My Wiki
            </div>
          </div>
        <div class="user row">
          <div style="height: 60px;width: 100%;">
            <div class="row no-gutters">
              <div class="col-md-3">

                <div class="row">
                  
                  <div class="col-md-4 col-4">
                    <div class="myWiki-user-image" >
                      <?php echo '<img src="'.$row['profilePic'].'" media-simple class="img-round">';?>
                    </div>
                  </div>
                  <div class="col-md-8 col-8 myWiki-margin-0 nopadding">
                    <p>Mywiki wiki <span class="myWiki-wiki-date">Dec 27,2017</span>                  
                      <br><span class="myWiki-user-name-des">Cse,Uinversity of Barisal</span>
                    </p>
                  </div>
                </div>

                </div>


              <div class="col-md-9 col-9 myWiki-wiki-question myWiki-wiki m= nopadding">
                Why does it seem that so many companies treat programmers so poorly?
              </div>
            </div>      
            </div>      
          <div class="col-lg-3 col-md-4 nopadding">
              <div class="user_image">
            <?php
                echo '<p><img src="'.$row['profilePic'].'" media-simple></p>';
                ?>
                 
            </div>
              

          </div>
          <div class="testimonials-caption col-lg-9 col-md-8 myWiki-wiki nopadding">
            <div class="user_text ">
              <p class="mbr-fonts-style  display-7">
                <?php 
                $string = "
                 Programming is hard to schedule. It is common for a programmer to study a bug report for weeks and then fix it by changing one line of code. It is equally common to study a bug report a few hours and then conclude that the entire system will have to be rewritten. No-one can make reliable estimates of cost or delivery dates. Managers hate that. How can you go to the big bosses and say “I need $10,000,000 per year to fund development of a Whiz-Bang 2000 system. I don’t know how long it will take or whether it will succeed at all.?";
                                   // strip tags to avoid breaking any html
                  $string = strip_tags($string);
                  if (strlen($string) > 500) {

                      // truncate string
                      $stringCut = substr($string, 0, 500);
                      $endPoint = strrpos($stringCut, ' ');

                      //if the string doesn't contain any space then it will cut without word basis.
                      $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                      $string .= '... <a href="/this/story">Read More</a>';
                  }
                  echo $string;?>
              </p>
            </div>
            <div class="align-left  display-7">
                 <ul class="tags">
                    <?php foreach($arrResult as $val)
                        {
                        ?>
                        
                     <li class="tag"><?php  echo "$val";?></li>
                   <?php }?>
                 </ul>
            </div>

            <!--eiki button-->
            <div class="row no-gutters" style="margin-left: 2px;">
              <div class="col-2 text-center">
                <button class="myWiki-wiki-like-button" >
                  <i class="fas fa-angle-double-up"></i> Upvote 2.7k
                </button>
              </div>
              <div class="col-2 text-center">
                <button class="myWiki-wiki-like-button" >
                  <i class="fa fa-retweet" ></i>Share 100
                </button>
              </div>             
              <div class="col-2 text-center">
                <button class="myWiki-wiki-like-button" >
                  <i class="far fa-eye"></i>200,50
                </button>
              </div>              
              <div class="col-6 text-center">
     <ul class="list-inline">
  <li class="list-inline-item">Lorem ipsum</li>
  <li class="list-inline-item">Phasellus iaculis</li>
  <li class="list-inline-item">Nulla volutpat</li>
</ul>
              </div>
            </div>
            <!---->
        </div>
    </div>
        <?php
                }
        ?>
          
    </div>
  </div>
</section>

<section once="" class="cid-qBZn2MwvrY" id="footer6-q" data-rv-view="42">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2017 sInformer-rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
$(".result").mouseleave(function(){
    $(".result").hide();
});
$(".in").mouseenter(function(){
    $(".result").show();
})
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 0.2.5
 * 
 */
(function($) {

    jQuery.fn.extend({
        slimScroll: function(o) {

            var ops = o;
            //do it for every element that matches selector
            this.each(function(){

            var isOverPanel, isOverBar, isDragg, queueHide, barHeight,
                divS = '<div></div>',
                minBarHeight = 30,
                wheelStep = 30,
                o = ops || {},
                cwidth = o.width || 'auto',
                cheight = o.height || '250px',
                size = o.size || '7px',
                color = o.color || '#000',
                position = o.position || 'right',
                opacity = o.opacity || .4,
                alwaysVisible = o.alwaysVisible === true;
            
                //used in event handlers and for better minification
                var me = $(this);

                //wrap content
                var wrapper = $(divS).css({
                    position: 'relative',
                    overflow: 'hidden',
                    width: cwidth,
                    height: cheight
                }).attr({ 'class': 'slimScrollDiv' });

                //update style for the div
                me.css({
                    overflow: 'hidden',
                    width: cwidth,
                    height: cheight
                });

                //create scrollbar rail
                var rail  = $(divS).css({
                    width: '15px',
                    height: '100%',
                    position: 'absolute',
                    top: 0
                });

                //create scrollbar
                var bar = $(divS).attr({ 
                    'class': 'slimScrollBar ', 
                    style: 'border-radius: ' + size 
                    }).css({
                        background: color,
                        width: size,
                        position: 'absolute',
                        top: 0,
                        opacity: opacity,
                        display: alwaysVisible ? 'block' : 'none',
                        BorderRadius: size,
                        MozBorderRadius: size,
                        WebkitBorderRadius: size,
                        zIndex: 99
                });

                //set position
                var posCss = (position == 'right') ? { right: '1px' } : { left: '1px' };
                rail.css(posCss);
                bar.css(posCss);

                //wrap it
                me.wrap(wrapper);

                //append to parent div
                me.parent().append(bar);
                me.parent().append(rail);

                //make it draggable
                bar.draggable({ 
                    axis: 'y', 
                    containment: 'parent',
                    start: function() { isDragg = true; },
                    stop: function() { isDragg = false; hideBar(); },
                    drag: function(e) 
                    { 
                        //scroll content
                        scrollContent(0, $(this).position().top, false);
                    }
                });

                //on rail over
                rail.hover(function(){
                    showBar();
                }, function(){
                    hideBar();
                });

                //on bar over
                bar.hover(function(){
                    isOverBar = true;
                }, function(){
                    isOverBar = false;
                });

                //show on parent mouseover
                me.hover(function(){
                    isOverPanel = true;
                    showBar();
                    hideBar();
                }, function(){
                    isOverPanel = false;
                    hideBar();
                });

                var _onWheel = function(e)
                {
                    //use mouse wheel only when mouse is over
                    if (!isOverPanel) { return; }

                    var e = e || window.event;

                    var delta = 0;
                    if (e.wheelDelta) { delta = -e.wheelDelta/120; }
                    if (e.detail) { delta = e.detail / 3; }

                    //scroll content
                    scrollContent(0, delta, true);

                    //stop window scroll
                    if (e.preventDefault) { e.preventDefault(); }
                    e.returnValue = false;
                }

                var scrollContent = function(x, y, isWheel)
                {
                    var delta = y;

                    if (isWheel)
                    {
                        //move bar with mouse wheel
                        delta = bar.position().top + y * wheelStep;

                        //move bar, make sure it doesn't go out
                        delta = Math.max(delta, 0);
                        var maxTop = me.outerHeight() - bar.outerHeight();
                        delta = Math.min(delta, maxTop);

                        //scroll the scrollbar
                        bar.css({ top: delta + 'px' });
                    }

                    //calculate actual scroll amount
                    percentScroll = parseInt(bar.position().top) / (me.outerHeight() - bar.outerHeight());
                    delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

                    //scroll content
                    me.scrollTop(delta);

                    //ensure bar is visible
                    showBar();
                }

                var attachWheel = function()
                {
                    if (window.addEventListener)
                    {
                        this.addEventListener('DOMMouseScroll', _onWheel, false );
                        this.addEventListener('mousewheel', _onWheel, false );
                    } 
                    else
                    {
                        document.attachEvent("onmousewheel", _onWheel)
                    }
                }

                //attach scroll events
                attachWheel();

                var getBarHeight = function()
                {
                    //calculate scrollbar height and make sure it is not too small
                    barHeight = Math.max((me.outerHeight() / me[0].scrollHeight) * me.outerHeight(), minBarHeight);
                    bar.css({ height: barHeight + 'px' });
                }

                //set up initial height
                getBarHeight();

                var showBar = function()
                {
                    //recalculate bar height
                    getBarHeight();
                    clearTimeout(queueHide);
                    
                    //show only when required
                    if(barHeight >= me.outerHeight()) {
                        return;
                    }
                    bar.fadeIn('fast');
                }

                var hideBar = function()
                {
                    //only hide when options allow it
                    if (!alwaysVisible)
                    {
                        queueHide = setTimeout(function(){
                            if (!isOverBar && !isDragg) { bar.fadeOut('slow'); }
                        }, 1000);
                    }
                }

            });
            
            //maintain chainability
            return this;
        }
    });

    jQuery.fn.extend({
        slimscroll: jQuery.fn.slimScroll
    });

})(jQuery);


//invalid name call
              $('#chatlist').slimscroll({
                  color: '#00f',
                  size: '10px',
                  width: '50px',
                  height: '150px'                  
              });
</script>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
