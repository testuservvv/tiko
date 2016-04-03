<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="title" content="" />
<meta name="description" content="" />
<title>Brightster</title>
<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/slider_scroll.css" rel="stylesheet" type="text/css" />
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/Liberation_Serif_400-Liberation_Serif_700-Liberation_Serif_italic_400-Liberation_Serif_italic_700.font.js" type="text/javascript"></script>
<script type="text/javascript">
	 Cufon.replace('h1.html') ('h2') ('h3') ('h4') ('h5') ('h6') ('#nav li a', {
	 hover: true
})
</script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(document).ready(function() {
		/* for top navigation */
		$(" #nav ul ").css({display: "none"}); // Opera Fix
		$(" #nav li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown(400);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden"});
		});

});
</script>
<script type="text/javascript" src="js/jcarousellite_1.0.1c4.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
	$(document).ready(function(){
		/* for sideright slideshow */
	 	$('#boxslideshow').cycle({
		timeout: 6000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		pause:   0,	  // true to enable "pause on hover"
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
		});

		/* for news ticker */
		$(".ticker").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 1,
		auto:3000,
		speed:1000,
		btnNext: ".next_item",
    	btnPrev: ".prev_item"
		});

		/* for news ticker */
		$(".ticker2").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 1,
		auto:2500,
		speed:1000,
		btnNext: ".next_item2",
    	btnPrev: ".prev_item2"
		});

	});
</script>
<script type="text/javascript" src="js/jquery.tools.min.js" ></script>
<script type="text/javascript">
jQuery.noConflict();
	jQuery(document).ready(function(){
// main vertical scroll
jQuery("#featured").scrollable({
	// basic settings
	vertical: true,
	size: 1,
	speed:800,
	clickable: false,
	loop:true,
	// up/down keys will always control this scrollable
	keyboard: 'static',

	// assign left/right keys to the actively viewed scrollable
	onSeek: function(event, i) {
		horizontal.scrollable(i).focus();
	}
// main navigator
}).autoscroll({autoplay: true}).navigator("#main_navi");

// horizontal scrollables. each one is circular and has its own navigator instance
var horizontal =jQuery(".items").scrollable({size: 1}).circular().navigator(".navi");
// when page loads setup keyboard focus on the first horzontal scrollable
horizontal.eq(0).scrollable().focus();
});
</script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  DD_belatedPNG.fix('img');
</script>
<![endif]--> 
</head>

<body>

	<!-- BEGIN HEADER -->
	<div id="top_container">
		<div class="centercolumn">
			<div id="top">
				<div id="logo"><a href="index-2.html"><img src="images/logo.gif" alt="" /></a></div><!-- end logop -->
				<div id="topsearch">
					<form method="post" action="#">
					<p><input type="text" class="inputbox" value="search" onblur="if (this.value == ''){this.value = 'search'; }" onfocus="if (this.value == 'search') {this.value = ''; }"/></p>
					</form>
				</div><!-- end topsearch -->
			</div><!-- end top -->
			<div class="clr"></div><!-- clear float -->
			<div id="topmenu">
				<div id="navigation">
					<ul id="nav">
						<li class="noborder"><a class="active" href="index-2.html">Home</a></li>
						<li><a href="about.html">About</a>
							<ul>
								<li><a href="index-2.html">Home</a></li>
								<li><a href="index-alt.html">Home Alternate</a></li>
								<li><a href="index-commerce.html">Home ECommerce</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="single.html">Single</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="table.html">Table Page</a></li>
								<li><a href="full-width.html">Full Width Page</a></li>
								<li><a href="product-list.html">Products List</a></li>
								<li><a href="product-detail.html">Product Details</a></li>
								<li><a href="shopping-cart.html">Shopping Cart</a></li>
							</ul>
						</li>
						<li><a href="index-commerce.html">ECommerce</a>
							<ul>
								<li><a href="index-commerce.html">Home ECommerce</a></li>
								<li><a href="product-list.html">Products List</a></li>
								<li><a href="product-detail.html">Product Details</a></li>
							</ul>
						</li>
						<li><a href="services.html">Services</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div><!-- end of navigation -->
			</div><!-- end topmenu -->
			<div class="clr"></div><!-- end clear float -->
		</div><!-- end centercolumn -->
	</div><!-- end top container -->
	<!-- END HEADER -->
	
	<!-- BEGIN CONTENT -->
	<div id="content_container">
		<div class="centercolumn">
			<div id="featured_container">
					<ul id="main_navi">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
					<div id="featured">
						<div id="featured_scroll"> 
					 
								<div class="scrollable"> 
									<div class="items"> 
										<div class="item_text">
											<h1>Clean and Professional Business Website</h1>
											<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
										</div> 
										<div class="item_image"><img src="images/pic1.jpg" alt="" /></div> 
									</div> 
								</div> 
					 
								<div class="scrollable"> 
									<div class="items"> 
										<div class="item_text">
											<h1>Vestibulum in elit nunc sit amet</h1>
											<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
										</div> 
										<div class="item_image"><img src="images/pic2.jpg" alt="" /></div> 
									</div> 
								</div> 
							
								<div class="scrollable"> 
									<div class="items"> 
										<div class="item_text">
										<h1>Suspendisse urna urna dapibus</h1>
										<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
										</div> 
										<div class="item_image"><img src="images/pic3.jpg" alt="" /></div> 
									</div> 
								</div> 
							
						</div> 
					</div><!-- end of featured -->
			</div><!-- end featured container -->
			<div id="maincontent">
				<div id="content">
					<h3 class="title">Welcome to company name</h3>
					<h1 class="tblue title">Clean and Profesional</h1><br />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				</div><!-- end content -->
				<div id="sideright">
					<h2>Featured Projects</h2>
					<div id="boxslideshow">
						<div class="cycle">
							<img src="images/feature1.jpg" alt=""  />
							<span class="tbold">Photoworks</span>
							<p>Donec adipiscing condimentum dolor eu volutpat. Nulla dolor ligula, aliquet in</p>
						</div>
						<div class="cycle">
							<img src="images/feature2.jpg" alt=""  />
							<span class="tbold">Blitz</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="cycle">
							<img src="images/feature3.jpg" alt=""  />
							<span class="tbold">Multisoft</span>
							<p>Cras condimentum mauris ac elit laoreet faucibus et ut diam. </p>
						</div>
					</div><!-- end boxslideshow -->
				</div><!-- end sideright -->
				<div class="clr"></div><!-- end clear float -->
			</div><!-- end maincontent -->
		</div>
	</div><!-- end content container -->
	<!-- END CONTENT -->
	
	<!-- BEGIN FOOTER -->
	<div id="bottom_container">
		<div class="centercolumn">
			<div class="bottom_box">
				<h2>Latest News</h2>
				<div class="ticker">
					<ul>
						<li><span class="date">January 12, 2010</span>
						<p><strong>Lorem ipsum dolor sit amet</strong><br />
		Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</li>
						<li><span class="date">January 10, 2010</span>
						<p><strong>Donec scelerisque mi at nisl mollis pellentesque</strong><br />
		Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</li>
						<li><span class="date">January 8, 2010</span>
						<p><strong>Pellentesque habitant morbi tristique senectus</strong><br />
		Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</li>
					</ul>
				</div><!-- end ticker -->
				<div class="navscroll">
					<a href="#" class="prev_item">Prev</a>
					<a href="#" class="next_item">Next</a>
				</div><!-- end navscroll -->
			</div><!-- end latest news -->
			<div class="spacer">&nbsp;</div>
			<div class="bottom_box">
				<h2>Testimonial</h2>
				<div class="ticker2">
					<ul>
						<li><p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.<em> <strong>by Name</strong></em> </p>
						</li>
						<li><p>Donec scelerisque mi at nisl mollis pellentesque ullamcorper augue porta. Ut gravida pretium turpis, eget volutpat nibh gravida a. Vestibulum varius commodo ligula, sed convallis turpis porttitor ac.<em> <strong>by Name</strong></em> </p>
						</li>
					</ul>
				</div><!-- end ticker -->
				<div class="navscroll">
					<a href="#" class="prev_item2">Prev</a>
					<a href="#" class="next_item2">Next</a>
				</div><!-- end navscroll -->
			</div><!-- end testimonial -->
			<div class="spacer">&nbsp;</div>
			<div class="bottom_box">
				<h2>Feature List</h2>
				<ul>
					<li><a href="#">Lorem ipsum dolor sit amet</a></li>
					<li><a href="#">Consectetur adipisicing elit</a></li>
					<li><a href="#">Sed do eiusmod </a></li>
					<li><a href="#">Tempor </a></li>
				</ul>
			</div><!-- end feature list -->
			<div class="clr"></div><!-- end clear float -->
		</div>
	</div><!-- end bottom container -->
	<div class="clr"></div><!-- end clear float -->
	<div id="footer_container">
		<div class="centercolumn">
			<div id="foot">All content Copyright &copy;2010 <a href="index-2.html">Brighster Company</a> | <a href="full-width.html">Privacy Policy</a></div>
			<!-- end foot -->
		</div>
	</div><!-- end footer container -->
	<!-- END FOOTER downloaded by exet.tk -->
	
</body>
</html>
