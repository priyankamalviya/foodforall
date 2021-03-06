<!DOCTYPE HTML>
<html>
    <head>
    <title>Daisy - A Charming jQuery Mobile Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- jQueryMobileCSS - styling-->
		<link rel="stylesheet" href="css/jqeury.mobile.theme.min.css" />
				
		<!-- jQueryMobile icons -->
		<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
		
		<!-- jQueryMobile core CSS -->
		<link rel="stylesheet" href="css/jquery.mobile.min.css" />
		
		<!-- Load fonts -->
		<link rel="stylesheet" href="css/fonts.css" />
				
		<!-- DAISY styles -->
		<link rel="stylesheet" href="css/style.css" />
		
		<!-- Luke's styles -->
		<link rel="stylesheet" href="css/luke.css" />
				
		<!-- Load Google Fonts 
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic|Oswald:400,700|Roboto:400,300,300italic,400italic,900,700,500' rel='stylesheet' type='text/css'> -->
		
		<!-- Load Font Awesome Icons -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		
		<!-- jQueryMobile -->
		<script src="js/jquery.mobile.min.js"></script>
		
		<!-- DAISY JS -->
		<script src="js/scripts.js"></script>

    </head>
    <body>
    
    	<div data-role="page">
        
            <div data-role="panel" data-display="push" id="sidebar" data-theme="c">
            
                	<form id="sidebar-searchform">
                	    <input data-role="none" class="luke-input" type="text" name="s" placeholder="Enter your text" />
                	    <input data-role="none" class="luke-button" type="submit" name="submit" value="" />
                	</form>
            		
            		<h4>Daisy styles (6)</h4>
            		
            		<ul data-role="listview">
            		    <li data-icon='false'><i class="fa fa-list"></i><a data-fajax="false" href="index-alternative.html">Alternativa</a></li>
            		    <li data-icon='false'><i class="fa fa-briefcase"></i><a data-ajax="false" href="index-business.html">Byznis</a></li>
            		    <li data-icon='false'><i class="fa fa-home"></i><a data-ajax="false" href="index.html">Klasicka</a></li>
            		    <li data-icon='false'><i class="fa fa-shopping-cart"></i><a data-ajax="false" href="index-ecommerce.html">E-Commerce</a></li>
            		    <li data-icon='false'><i class="fa fa-user"></i><a data-ajax="false" href="index-personal.html">Personalni</a></li>
            		    <li data-icon='false'><i class="fa fa-align-right"></i><a data-ajax="false" href="index-alt-right.html">Right sidebar</a></li>
            		</ul>
            			
            		<h4>Navigation</h4>
            			
            		<ul data-role="listview">
            		    
            		    <li data-icon='false'><i class="fa fa-pencil-square-o"></i><a data-ajax="false" href="blog.html">Blog</a></li>
            		    
            		    <li data-icon='false' class="menu-item-has-children"><i class="fa fa-html5"></i><a href="#">HTML Examples (9)</a>
            		        <ul data-role="listview" class="sub-menu">
            		        	<li data-icon='false'><i class="fa fa-list"></i><a href="text.html" data-ajax="false">Text</a></li>
            		        	<li data-icon='false'><i class="fa fa-filter"></i><a href="forms.html" data-ajax="false">Forms</a></li>
            		        	<li data-icon='false'><i class="fa fa-align-left"></i><a href="panels.html" data-ajax="false">Sidebars</a></li>
            		        	<li data-icon='false'><i class="fa fa-table"></i><a href="tables.html" data-ajax="false">Tables</a></li>
            		        	<li data-icon='false'><i class="fa fa-th-large"></i><a href="boxes.html" data-ajax="false">Boxes</a></li>
            		        	<li data-icon='false'><i class="fa fa-arrow-left"></i><a href="back.html" data-ajax="false">Back button</a></li>
            		        	<li data-icon='false'><i class="fa fa-list-alt"></i><a href="listview.html" data-ajax="false">Listview</a></li>
            		        	<li data-icon='false'><i class="fa fa-external-link"></i><a href="dialogs.html" data-ajax="false">Dialogs</a></li>
            		        	<li data-icon='false'><i class="fa fa-arrows-h"></i><a href="footer.html" data-ajax="false">Footer</a></li>
            		        </ul>
            		    </li>
            		    
            		    <li data-icon='false' class="menu-item-has-children"><i class="fa fa-code"></i><a href="#">Cool Extensions (4)</a>
            		        <ul data-role="listview" class="sub-menu">
            		        	<li data-icon='false'><i class="fa fa-road"></i><a href="location.html" data-ajax="false">GPS Tracking</a></li>
            		        	<li data-icon='false'><i class="fa fa-toggle-right"></i><a href="slider.html" data-ajax="false">Owl Slider</a></li>
            		        	<li data-icon='false'><i class="fa fa-sort-amount-asc"></i><a href="iscroll.html" data-ajax="false">iScroll 5</a></li>
            		        	<li data-icon='false'><i class="fa fa-tablet"></i><a href="devices.html" data-ajax="false">Device Detection</a></li>
            		        </ul>
            		    </li>
            		    
            		    <li data-icon='false' class="menu-item-has-children"><i class="fa fa-coffee"></i><a href="#">Developers Extra (3)<span class="menu-mark">1</span></a>
            		        <ul data-role="listview" class="sub-menu">
            		        	<li data-icon='false'><i class="fa fa-paper-plane-o"></i><a data-ajax="false" href="getting-started.html">Getting started</a></li>
            		        	<li data-icon='false'><i class="fa fa-stack-overflow"></i><a data-ajax="false" href="version.html">Changelog<span class="menu-mark">1</span></a></li>
            		        	<li data-icon='false'><i class="fa fa-genderless"></i><a data-ajax="false" href="_.html">Plain Page</a></li>
            		        </ul>
            		    </li>
            		    
            		    <li data-icon='false'><i class="fa fa-envelope-o"></i><a data-ajax="false" href="contact.php">Contact form</a></li>
            		    
            		</ul>
            </div>
            
            <form id="searchform">
                <input data-role="none" class="luke-input" type="text" name="s" placeholder="Enter your text" />
                <input data-role="none" class="luke-button" type="submit" name="submit" value="" />
            </form>
    
            <div data-role="header" data-tap-toggle="false" data-theme='b'>
                <a href='#sidebar' data-role="none" id="a-sidebar"><img src="images/menu-icon.png" alt="sidebar" id="header-menu-icon" /></a>
                <h1 class="header-title">Contact</h1>
                <a href='#' data-role="none" id="a-search"><img src="images/search-icon.png" alt="search" id="header-search-icon" /></a>
            </div>
            
            <div data-role="content" data-inner="false">
                
                <iframe class="fullwidth" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York&amp;sll=49.891235,-97.15369&amp;sspn=47.259509,86.923828&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+United+States&amp;ll=40.714867,-74.005537&amp;spn=0.019517,0.018797&amp;z=14&amp;iwloc=near&amp;output=embed" height="360" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

                    <h2>Working contact form</h2>
                    <p>Daisy comes with fully <b>working PHP</b> AJAX-like contact form.</p>
                    <p>Easy to edit. Change <code>$to</code> variable in <code>contact.php</code> to your email (like company@web.net) and that's all!</p>
                  

					<?php
					    if(@$_GET['email-send'] == 'success') echo "<div class='luke-alert luke-alert-success'><i class='fa fa-2x fa-check fa-fw'></i><p>Yay! Your message has been send successfully.</p></div>";
					    if(@$_GET['email-send'] == 'error') echo "<div class='luke-alert luke-alert-error'><i class='fa fa-2x fa-exclamation fa-fw'></i><p>Your message has not been sent. Check your mail server.</p></div>";
					    if(@$_GET['email-send'] == 'fillall') echo "<div class='luke-alert luke-alert-warning'><i class='fa fa-2x fa-warning fa-fw'></i><p>Please fill all the necessary fields.</p></div>";
					?>
                	<form action="email-script.php" method="post">
                        <input data-role="none" type="text" class="luke-input" name="name" placeholder="Your Name*" required />
                        <input data-role="none" type="text" class="luke-input" name="email" placeholder="Your Email*" required />
                        <textarea data-role="none" class="luke-input" name="message" placeholder="Your Message*" required ></textarea>
                        <button data-role="none" type="submit" class="luke-button"><i class="fa fa-send"></i>Send</button>
                    </form>
            
            </div>
            
            <div data-role="footer" data-theme="none" data-border="false" data-inner="true">
                <p data-inset="true">Copyright 2015. All rights reserved.</p>
            </div>
            
        </div>

    </body>
</html>