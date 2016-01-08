<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Magasin</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/stylesheet/stylesheet.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/frontend/stylesheet/jquery-ui-1.8.9.custom.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/stylesheet/cloud-zoom.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/frontend/stylesheet/carousel.css" type="text/css" media="screen" />
        <!-- jQuery and Custom scripts -->
        <script src="<?php echo base_url(); ?>template/frontend/js/jquery-1.5.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/frontend/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/frontend/js/custom_scripts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/frontend/js/jquery.roundabout.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/frontend/js/jquery-ui-1.8.9.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/frontend/js/tabs.js"></script>
        <script src="<?php echo base_url(); ?>template/frontend/js/cloud-zoom.1.0.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/frontend/js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <!-- Tipsy -->
        <script src="<?php echo base_url(); ?>template/frontend/js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>template/frontend/js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>template/frontend/js/jquery.tweet.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>templete/frontend/js/country.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>template/frontend/js/jquery.tweet.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- MAIN WRAPPER -->
        <div id="container"> 

            <!-- SIDEFEATURES -->
          <!--  <div id="sidefeatures">
                <ul>
                    <li class="side_cart"><span class="icon">Shopping Cart</span>
                        <div id="cart">
                            <div class="heading">
                                <h4>Shopping Cart</h4>
                                <span id="cart_total">3 item(s) - $1099.99</span> </div>
                            <div class="content">
                                <table class="cart">
                                    <tbody>
                                        <tr>
                                            <td class="image"><a href="#"><img alt="Spicylicious" src="<?php echo base_url(); ?>template/frontend/image/cart_pic1.jpg"/></a></td>
                                            <td class="name"><a href="#">Product name 1</a>
                                                <div> </div></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$117.50</td>
                                            <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>template/frontend/image/close.png"/></td>
                                        </tr>
                                        <tr>
                                            <td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="<?php echo base_url(); ?>template/frontend/image/cart_pic2.jpg"/></a></td>
                                            <td class="name"><a href="#">Product name 2</a>
                                                <div> </div></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$328.99</td>
                                            <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>template/frontend/image/close.png"/></td>
                                        </tr>
                                        <tr>
                                            <td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="<?php echo base_url(); ?>template/frontend/image/cart_pic3.jpg"/></a></td>
                                            <td class="name"><a href="#">Product name 3</a>
                                                <div> - <small>Extra Cheese</small><br/>
                                                </div></td>
                                            <td class="quantity">x&nbsp;1</td>
                                            <td class="total">$94.00</td>
                                            <td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>template/frontend/image/close.png"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="total">
                                    <tbody>
                                        <tr>
                                            <td align="right"><b>Sub-Total</b></td>
                                            <td align="right">$459.99</td>
                                        </tr>
                                        <tr>
                                            <td align="right"><b>VAT 17.5%</b></td>
                                            <td align="right">$80.50</td>
                                        </tr>
                                        <tr>
                                            <td align="right"><b>Total</b></td>
                                            <td align="right">$540.49</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="checkout"><a class="button" href="checkout.html"><span>Checkout</span></a></div>
                            </div>
                        </div>
                    </li>
                    <li class="side_currency"><span class="icon">Currency</span>
                        <div id="currency"> Currency <a href="#" title="Euro">€</a> <a href="#" title="Pound Sterling">£</a> <a title="US Dollar">$</a> </div>
                    </li>
                    <li class="side_lang"><span class="icon">Language</span>
                        <div id="language"> Language <a href="#" title="English"><img src="<?php echo base_url(); ?>template/frontend/image/gb.png" alt="Spicylicious store"/></a> <a href="#" title="Deutsch"><img src="<?php echo base_url(); ?>template/frontend/image/de.png" alt="Spicylicious store"/></a> <a title="Bylgarski"><img src="<?php echo base_url(); ?>template/frontend/image/bg.png" alt="Spicylicious store"/></a> </div>
                    </li>
                    <li class="side_search"><span class="icon">Search</span>
                        <div id="search">
                            <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
                            <a href="#" class="button-search"></a> </div>
                    </li>
                </ul>
            </div>-->
            <!-- END OF SIDEFEATURES --> 

            <!-- HEADER -->
            <div id="header">
                <div class="inner">
                    <ul class="main_menu menu_left">
                        <li><a href="<?php echo base_url(); ?>front/checkout/customer_login">My Account</a></li>
                      <!--  <li><a href="<?php echo base_url(); ?>wishlist">Wish List <b>(3)</b></a></li>-->
                        <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    </ul>
                    <div id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>template/frontend/image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
                    <ul class="main_menu menu_right">
                        <li><a href="<?php echo base_url(); ?>front/front/category">Category</a></li>
                        <li><a href="<?php echo base_url();?>front/cart/show_cart">Shopping Cart (<?php echo $this->cart->total_items()?>)</a></li>
                       <!-- <li><a href="<?php echo base_url(); ?>checkout">Checkout</a></li>-->
                        <li><a href="<?php echo base_url(); ?>contact_us">Contact Us</a></li>
                    </ul>
                    <div id="welcome">
                        <?php
							$message = $this->session->userdata('message');
							if ($message == NULL) {
                        ?>   
                            Welcome <a> <?php echo $this->session->userdata('customer_name'); ?></a> you can 
						<?php
							$customer_id = $this->session->userdata('customer_id');
							if ($customer_id != NULL) {
						?>   
							<a href="<?php echo base_url(); ?>front/checkout/logout">Logout</a> </div>
						<?php
							} else {
						?>
							<a href="<?php echo base_url(); ?>front/checkout/customer_login">login</a> or <a href="<?php echo base_url(); ?>front/checkout/new_customer_signup">create an account</a>. </div>
						<?php
							} 
						?>
						<?php
							} else {
						?>
						<?php echo $this->session->userdata('message'); ?> . you can <a href="<?php echo base_url(); ?>front/checkout/customer_login">login</a>
						<?php $this->session->unset_userdata('message'); ?>
                </div>
						<?php } ?>
				<div class="menu">
                    <?php foreach ($all_category as $v_category) { ?>
                    <ul id="topnav">
                        <li><a href="<?php echo base_url(); ?>front/front/category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a>                         
                        </li>
                    </ul>
					<?php } ?>
				</div>
        </div>
        </div>
        <!-- END OF HEADER --> 

        <!-- CONTENT -->
        <div id="content_holder" class="fixed">
<?php echo $maincontent; ?>
        </div>
        <!-- END OF CONTENT --> 

        <!-- PRE-FOOTER -->
        <div id="pre_footer">
            <div class="inner">

            </div>
        </div>
        <!-- END OF PRE-FOOTER --> 

        <!-- FOOTER -->
        <div id="footer">
            <div class="inner">
                <div class="column_big"> 
                    <!-- FOOTER MODULES AREA -->
                    <div class="footer_modules">
                        <h3>About spicylicious</h3>
						<?php 
							$val = $this->db->get_where('tbl_about')->result_array();
							foreach($val as $row){
						?>
                        <p><?php echo $row['about_description'];?></p>
						<?php } ?>
                    </div>
                    <!-- END OF FOOTER MODULES AREA -->
                    <div class="footer_social">
                        <h3>Spread the word</h3>
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
                            //<![CDATA[
                            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
                            //]]>
                            </script> 
                        </div>
                        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
                        <!-- AddThis Button END --> 
                    </div>
                </div>
                <div class="column_small">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>front/checkout/customer_login">My Account</a></li>
                     <!--   <li><a href="#">Order History</a></li>
                        <li><a href="<?php echo base_url(); ?>wishlist">Wishlist</a></li>
                       <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Returns</a></li>-->
                    </ul>
                </div>
                <div class="column_small">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
                       <!-- <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms and conditions</a></li>-->
                        <li><a href="<?php echo base_url(); ?>contact_us">Contact Us</a></li>
                      <!--  <li><a href="sitemap.html">site map</a></li>-->
                    </ul>
                </div>
                <div class="column_small">
                    <h3>Manufacturer</h3>
<?php foreach ($all_manufacturer as $v_manufacturer) { ?>
                        <ul>
                            <li><a href="<?php echo base_url(); ?><?php echo $v_manufacturer->manufacturer_id; ?>"><?php echo $v_manufacturer->manufacturer_name; ?></a></li>
                            <!-- <li><a href="#">Gift vouchers</a></li>
                             <li><a href="#">Affiliates</a></li>
                             <li><a href="#">Specials</a></li>-->
                        </ul>
<?php } ?>
                </div>
                <div class="clear"></div>
                <span class="copyright">Developed by <a href="http://ananyadey.com/">Ananya Dey</a></span> </div>
        </div>
        <!-- END OF FOOTER --> 

        </div>
        <!-- END OF MAIN WRAPPER --> 
        <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
        <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
        <script type="text/javascript"><!--
        $(document).ready(function () {
                $('#twitter_update_list').cycle({
                    fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                    next: '#tweet_next',
                    prev: '#tweet_prev'
                });
            });
            //--></script> 
        <script type="text/javascript">
            $(document).ready(function () {
                var interval;
                $('ul#myRoundabout')
                        .roundabout({
                            'btnNext': '.next_round',
                            'btnPrev': '.previous_round'
                        }
                        )
                        .hover(
                                function () {

                                    clearInterval(interval);
                                },
                                function () {

                                    interval = startAutoPlay();
                                });

                interval = startAutoPlay();
            });
            function startAutoPlay() {
                return setInterval(function () {
                    $('ul#myRoundabout').roundabout_animateToPreviousChild();
                }, 3000);
            }
        </script>
    </body>
</html>
