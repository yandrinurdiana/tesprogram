<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="assets/css/ddsmoothmenu.css" />

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', 
	contentsource: "markup" 
})

</script>

<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
<script language="javascript" type="text/javascript" src="assets/scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="assets/scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="assets/scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#"></a></h1>
        </div>
        
        <div id="header_right">
            <ul id="language">
                <li><a><img src="assets/images/usa.png" alt="English" /></a></li>
                <li><a><img src="assets/images/china.png" alt="Chinese" /></a></li>
                <li><a><img src="assets/images/germany.png" alt="Germany" /></a></li>
                <li><a><img src="assets/images/india.png" alt="Indian" /></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> 
    </div> 
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="products.html">Products</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
              </ul>
            </li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div>
    
    <div id="templatemo_middle">
    	<img src="assets/images/templatemo_image_01.png" width="300px" alt="Image 01" />
    	<h1>Online Spare Parts</h1>
        <p></p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> 
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="product_slider">
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">
                                <a href="#slide1" target="_parent">
                                <img src="assets/images/gallery/01.jpg" width="100px" alt="product 1" /></a>
                        </div>	
                        <div class="SlideItMoo_element">
                                <a href="#slide2" target="_parent">
                                <img src="assets/images/gallery/02.jpg" width="100px" alt="product 2" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide3" target="_parent">
                                 <img src="assets/images/gallery/03.jpg" width="100px" alt="product 3" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide4" target="_parent">
                                <img src="assets/images/gallery/04.jpg"  width="100px" alt="product 4" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide5" target="_parent">
                               <img src="assets/images/gallery/05.jpg" width="100px" alt="product 5" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide6" target="_parent">
                                <img src="assets/images/gallery/06.jpg" width="100px" alt="product 6" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide6" target="_parent">
                                <img src="assets/images/gallery/07.jpg" width="100px" alt="product 7" /></a>
                        </div>
                    </div>			
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        
        <div id="sidebar">
        	<h3>Categories</h3>
            <ul class="sidebar_menu">
			    <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>				
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>				
            	<li><a href="#">Etiam in tellus</a></li>
                <li><a href="#">Hendrerit justo</a></li>     
                <li><a href="#">Integer interdum</a></li>				
                <li><a href="#">Maecenas a diam</a></li>
				<li><a href="#">Nullam in semper</a></li>
				<li><a href="#">Posuere in commodo</a></li>
				<li><a href="#">Tincidunt leo</a></li>
                <li><a href="#">Vestibulum blandit</a></li>
			</ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div>

        <div id="content">
        	<div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="assets/images/product/01.jpg" width="100px" alt="Product 01" /></a>
                <h3>Sparepart 1</h3>
                <p class="product_price">Rp. 250.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="assets/images/product/02.jpg" width="100px" alt="Product 02" /></a>
                <h3>Sparepart 2</h3>
                <p class="product_price">Rp. 255.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="assets/images/product/03.jpg" width="100px" alt="Product 03" /></a>
                <h3>Sparepart 3</h3>
                <p class="product_price">Rp. 150.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="assets/images/product/04.jpg" width="100px" alt="Product 04" /></a>
                <h3>Sparepart 4</h3>
                <p class="product_price">Rp. 110.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="assets/images/product/05.jpg" width="100px" alt="Product 05" /></a>
                <h3>Sparepart 5</h3>
                <p class="product_price">Rp. 130.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="productdetail.html"><img src="assets/images/product/06.jpg" width="100px" alt="Product 06" /></a>
                <h3>Sparepart 6</h3>
                <p class="product_price">Rp. 120.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>        	
            <div class="col col_14 product_gallery">
            	<a href="productdetail.html"><img src="assets/images/product/07.jpg" width="100px" alt="Product 07" /></a>
                <h3>Sparepart 7</h3>
                <p class="product_price">Rp. 150.000</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
           
            </div>        	
        </div>
    
        <div class="cleaner"></div>
    </div> 
    
    <div id="templatemo_footer">
    	<div class="col col_16">
        	<h4>Categories</h4>
            <ul class="footer_menu">
			    <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>				
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>				
		  </ul>  
        </div>
        <div class="col col_16">
        	<h4>Pages</h4>
            <ul class="footer_menu">
            	<li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
			</ul>  
        </div>
        <div class="col col_16">
        	<h4>Partners</h4>
            <ul class="footer_menu">
            	<li><a href="#">Website Templates</a></li>
            	<li><a href="#">HTML CSS Layouts</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Free Graphics</a></li>
			</ul>  
        </div>
        <div class="col col_16">
        	<h4>Social</h4>
            <ul class="footer_menu">
            	<li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">LinkedIn</a></li> 
		  </ul>  
        </div>
        <div class="col col_13 no_margin_right">
        	<h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2018 Your Company Name
		</center>
    </div> 
   
</div>

</body>
</html>