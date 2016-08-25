<!DOCTYPE HTML>
<html>
    <head>
        <title>Nightly - Contact Form</title>
    		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    		<!-- jQueryMobileCSS - styling-->
    		<link rel="stylesheet" href="css/jqeury.mobile.theme.min.css" />
    		
    		<!-- jQueryMobile icons -->
    		<link rel="stylesheet" href="css/jquery.mobile.icons.min.css" />
    
    		<!-- jQueryMobile core CSS -->
        <link rel="stylesheet" href="css/jquery.mobile.min.css" />
    		
    		<!-- NIGHTLY style -->
    		<link rel="stylesheet" href="css/nightly.css" />
    		
    		<!-- Load Google Fonts -->
    		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic|Oswald:400,700' rel='stylesheet' type='text/css'>
    		
    		<!-- Load Font Awesome Icons -->
    		<link rel="stylesheet" href="css/font-awesome.min.css">
    
        <!-- jQuery -->
    		<script src="js/jquery.min.js"></script>
    		
    		<!-- jQueryMobile -->
    		<script src="js/jquery.mobile.min.js"></script>
    		
    		<!-- NIGHTLY JS -->
    		<script src="js/nightly.js"></script>
    
        </head>
    <body>
    
        <div data-role="page" data-theme='a'>
        
   				<div data-role="panel" data-display="push" id="sidebar" data-theme="a">
               <ul data-role="listview">
                   <li data-icon='false' class="menu-item-has-children"><a href="#">Homepage Styles</a>
                       <ul data-role="listview" class="sub-menu">
                       	<li data-icon='false'><a data-ajax="false" href="index.html">Home</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="index-alternative.html">Home Alt</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="index-alt-right.html">Right Sidebar</a></li>
                       </ul>
                   </li>
                   <li data-icon='false' class="menu-item-has-children"><a href="#">Precoded Pages</a>
                       <ul data-role="listview" class="sub-menu">
                       	<li data-icon='false'><a data-ajax="false" href="about.html">About us</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="blog.html">Blog</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="blog-thumbnails.html">Excerpts with Thumbnails</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="works.html">Works</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="contact.php">Contact form</a></li>
                       </ul>
                   </li>
                   
                   <li data-icon='false' class="menu-item-has-children"><a href="#">HTML Examples</a>
                       <ul data-role="listview" class="sub-menu">
                       	<li data-icon='false'><a href="text.html" data-ajax="false">Text</a></li>
                       	<li data-icon='false'><a href="forms.html" data-ajax="false">Forms</a></li>
                       	<li data-icon='false'><a href="panels.html" data-ajax="false">Sidebars</a></li>
                       	<li data-icon='false'><a href="tables.html" data-ajax="false">Tables</a></li>
                       	<li data-icon='false'><a href="boxes.html" data-ajax="false">Boxes</a></li>
                       	<li data-icon='false'><a href="back.html" data-ajax="false">Back button</a></li>
                       	<li data-icon='false'><a href="listview.html" data-ajax="false">Listview</a></li>
                       	<li data-icon='false'><a href="dialogs.html" data-ajax="false">Dialogs</a></li>
                       	<li data-icon='false'><a href="footer.html" data-ajax="false">Footer</a></li>
                       </ul>
                   </li>
                   
                   <li data-icon='false' class="menu-item-has-children"><a href="#">jQuery Extensions</a>
                       <ul data-role="listview" class="sub-menu">
                       	<li data-icon='false'><a href="location.html" data-ajax="false">GPS Tracking</a></li>
                       	<li data-icon='false'><a href="slider.html" data-ajax="false">Owl Slider</a></li>
                       	<li data-icon='false'><a href="iscroll.html" data-ajax="false">iScroll 5</a></li>
                       	<li data-icon='false'><a href="devices.html" data-ajax="false">Device Detection</a></li>
                       </ul>
                   </li>
                   
                   <li data-icon='false' class="menu-item-has-children"><a href="#">Developers Extra</a>
                       <ul data-role="listview" class="sub-menu">
                       	<li data-icon='false'><a data-ajax="false" href="getting-started.html">Getting started</a></li>
                       	<li data-icon='false'><a data-ajax="false" href="version.html">Changelog<span class="menu-mark">1</span></a></li>
                       	<li data-icon='false'><a data-ajax="false" href="_.html">Plain Page</a></li>
                       </ul>
                   </li>
                   
                   <li data-icon='false' class="menu-item-has-children"><a href="#">New in 3.1</a>
                       <ul data-role="listview" class="sub-menu">
                         <li data-icon='false'><a data-ajax="false" href="blog-thumbnails.html">Blog Excerpts</a></li>
                         <li data-icon='false'><a data-ajax="false" href="article.html">Single article</a></li>
                         <li data-icon='false'><a data-ajax="false" href="index.html">Sidebar widgets</a></li>
                         <li data-icon='false'><a data-ajax="false" href="index.html">Fixed infobars</a></li>
                       </ul>
                   </li>
                   <li data-icon='false'><a data-ajax="false" href="../daisy/index.html">Daisy</a></li>
               </ul>
           </div>
           
           <div data-role="panel" data-display="push" id="sidebar-right" data-position="right" data-theme="d" class="theme-a">
              
             <aside class="widget">
                 <form role="search" method="get" id="searchform" class="nightly-searchform fullwidth align-center">
                   <input data-role="none" class="nightly-input" type="text" name="s" id="s" placeholder="Find on website..." value=""/>
                   <input data-role="none" class="nightly-button" type="submit" name="submit" value="" />
               	</form>
           	</aside>
           	
           	<aside id="recent-posts-2" class="widget">
           		<h4 class="sidebar-title">Recent Posts</h4>
           		<ul>
           			<li><a href="article.html">Wonderful sight at the city during the night</a></li>
           			<li><a href="article.html">On a Sunday walk in the forest</a></li>
           			<li><a href="article.html">Art showcase with amazing gallery post format</a></li>
           			<li><a href="article.html">Ready for work (image post format)</a></li>
           			<li><a href="article.html">Imagine Dragons video post format</a></li>
           		</ul>
           	</aside>
           	
           	<aside id="recent-posts-2" class="widget">
           		<h4 class="sidebar-title">Categories</h4>
           		<ul>
           			<li><a href="article.html">Artti</a></li>
           			<li><a href="article.html">Khavi</a></li>
           			<li><a href="article.html">Interview</a></li>
           			<li><a href="article.html">Photography</a></li>
           			<li><a href="article.html">Projekti</a></li>
           		</ul>
           	</aside>
           	
           	<aside id="recent-posts-2" class="widget">
           		<h4 class="sidebar-title">Custom menu</h4>
           		<ul>
           			<li><a href="tel:000000000">Call button</a></li>
           			<li><a href="contact.php">Get in touch</a></li>
           			<li><a href="mailto:email@email.com">Mail us</a></li>
           		</ul>
           	</aside>
           	
           	<aside id="recent-posts-2" class="widget">
           		<h4 class="sidebar-title">Text widget</h4>
           		<div class="textwidget">Fully widgetized sidebar. This is example of text widget.</div>
           	</aside>
           	
           	<aside id="recent-posts-2" class="widget">
           		<h4 class="sidebar-title">Custom menu</h4>
           		<div class="textwidget">
           			<ul class="panel-share">
               	       <li><a href="#"><i class="fa fa-behance fa-fw"></i></a></li>
               	       <li><a href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
               	       <li><a href="#"><i class="fa fa-instagram fa-fw"></i></a></li>
               	       <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
               	       <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
           		 	</ul>
           		</div>
           	</aside>
           	
           </div> <!-- #right-sidebar -->
           
      			<div data-role="header" data-position="fixed" data-border="false" class="header-info-bar" data-tap-toggle="false">
      				<div data-role="navbar">
      			   	<ul>
          			    <li><a href="tel:123456789"><i class="fa fa-phone fa-fw"></i><span>123456789</span></a></li>
          			    <li><a href="#"><i class="fa fa-user fa-fw"></i><span>Sign in</span></a></li>
          			    <li><a href="#"><i class="fa fa-desktop fa-fw"></i><span>Desktop</span></a></li>
          			    <li><a href="https://www.facebook.com/lukepostulka"><i class="fa fa-facebook fa-fw"></i><span>Facebook</span></a></li>
          			    <li><a href="https://twitter.com/lukepostulka"><i class="fa fa-twitter fa-fw"></i><span>Twitter</span></a></li>
      			   	</ul>
      				 </div>
      			</div>
   
           <div data-role="header" data-tap-toggle="false" data-theme='a'>
               <a href='#sidebar' data-role="none"><img src="images/menu-icon.png" alt="sidebar" id="header-menu-icon" /></a>
               <h1 class="header-title">Nightly</h1>
               <a href='#sidebar-right' data-role="none" id="a-right-sidebar"><img src="images/right-menu-icon.png" alt="sidebar" id="header-search-icon" /></a>
           </div>
            
            <div data-role="content">
                
                <iframe class="fullwidth" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York&amp;sll=49.891235,-97.15369&amp;sspn=47.259509,86.923828&amp;ie=UTF8&amp;hq=&amp;hnear=New+York,+United+States&amp;ll=40.714867,-74.005537&amp;spn=0.019517,0.018797&amp;z=14&amp;iwloc=near&amp;output=embed" height="300" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

                    <h2>PHP contact form</h2>
                    <p><strong>NIGHTLY</strong>comes with fully <b>working PHP</b> AJAX-like contact form.</p>
                    <p>Easy to edit. Change <code>$to</code> variable in <code>contact.php</code> to your email (like company@web.net) and that's all!</p>
                  

					<?php
					    if(@$_GET['email-send'] == 'success') echo "<div class='nightly-alert nightly-alert-success'><i class='fa fa-2x fa-check fa-fw'></i><p>Yay! Your message has been send successfully.</p></div>";
					    if(@$_GET['email-send'] == 'error') echo "<div class='nightly-alert nightly-alert-error'><i class='fa fa-2x fa-exclamation fa-fw'></i><p>Your message has not been sent. Check your mail server.</p></div>";
					    if(@$_GET['email-send'] == 'fillall') echo "<div class='nightly-alert nightly-alert-warning'><i class='fa fa-2x fa-warning fa-fw'></i><p>Please fill all the necessary fields.</p></div>";
					?>
                	<form action="email-script.php" method="post">
                        <input data-role="none" type="text" class="nightly-input" name="name" placeholder="Your Name*" required />
                        <input data-role="none" type="text" class="nightly-input" name="email" placeholder="Your Email*" required />
                        <textarea data-role="none" class="nightly-input" name="message" placeholder="Your Message*" required ></textarea>
                        <button data-role="none" type="submit" class="nightly-button" data-theme="a"><i class="fa fa-send"></i>Send</button>
                    </form>
            
            </div>
            
            <div data-role="footer" data-theme="none" data-border="false">
                <p data-inset="true">NIGHTLY 2015. All rights reserved.</p>
            </div>
            
        </div>

    </body>
</html>