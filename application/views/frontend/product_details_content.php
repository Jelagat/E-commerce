<!-- CONTENT -->
<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="<?php echo base_url();?>front/front/category/<?php echo $product_by_id->category_id;?>"><?php echo $product_by_id->category_name;?></a> » <?php echo $product_by_id->product_name;?></div>
        <h2 class="heading-title"><span>Pizza Delicioso</span></h2>

        <!-- PRODUCT INFO -->
        <div class="product-info fixed">
            <div class="left">
                <div class="image"> <a href="<?php echo base_url() . $product_by_id->product_image1; ?>" class="cloud-zoom" id="zoom1" rel="adjustX: 5, adjustY:0, zoomWidth:550, zoomHeight:400, showTitle: false"> <img src="<?php echo base_url() . $product_by_id->product_image; ?>" alt='' title="Pizza Delicioso" /></a> <span class="pricetag"><?php echo $product_by_id->product_price; ?></span> </div>
            <!--    <div class="image-additional">
                    <div class="image_car_holder">
                        <ul class="jcarousel-skin-opencart">
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage.jpg' "> <img src="<?php echo base_url(); ?>template/frontend/image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage1.jpg'"> <img src="<?php echo base_url(); ?>template/frontend/image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage2.jpg' "> <img src="<?php echo base_url(); ?>template/frontend/image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage.jpg' "> <img src="<?php echo base_url(); ?>template/frontend/image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage1.jpg'"> <img src="<?php echo base_url(); ?>template/frontend/image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage2.jpg' "> <img src="<?php echo base_url(); ?>template/frontend/image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                            <li><a href='<?php echo base_url(); ?>template/frontend/image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage1.jpg'"> <img src="<?php echo base_url(); ?>template/frontend/image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                            <li><a href=<?php echo base_url(); ?>template/frontend/image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: '<?php echo base_url(); ?>template/frontend/image/smallimage2.jpg' "> <img src="<?php echo base_url(); ?>template/frontend/image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        $('.image-additional ul').jcarousel({
                            vertical: false,
                            visible: 4,
                            scroll: 1
                        });
                    </script> 
                </div>-->
            </div>
            <div class="right">
                <div class="description"> <span>Brand:</span> <a href="#"><?php echo $product_by_id->manufacturer_name; ?></a><br/>
                    <span>Product Category:</span> <?php echo $product_by_id->category_name; ?><br/>
                    <span>Availability:
                        <?php
							if ($product_by_id->product_quantity > 0)
							{
						?>
							</span> In Stock 
						<?php
							} else { 
						?>
							</span> Out of Stock
						<?php 
							}
						?> 

                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
                        [CDATA[
                                    document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
                            ]]
                        </script> 
                    </div>
                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
                    <!-- AddThis Button END -->


                </div>
<!--                <div class="options">
                    <div class="option" id="option-217"><b><span class="required">*</span> Select Size:</b>
                        <select name="option[217]">
                            <option value=""> --- Please Select --- </option>
                            <option value="4">Small (+$4.70) </option>
                            <option value="3">Middle (+$3.53) </option>
                            <option value="1">Large (+$1.18) </option>
                        </select>
                    </div>

                </div>-->
              <!--  <div class="cart"> --><span class="label">Qty:</span>
                    <form action="<?php echo base_url(); ?>front/cart/add_to_cart" method="post">
                        <input type="text" value="1" size="1" name="quantity" id="qty"/>
                        <input type="hidden" name="product_id" value="<?php echo $product_by_id->product_id; ?>						
						<a class="button" id="button-cart" title="Add to Cart"><input type="submit" value="Add to Cart" > </a>
					</form>						
			<!--	</div>-->
						
                       <!-- <input type="submit" value="Add to Cart" > <a href="#" class="wish_button" title="Add to Wish List">Add to Wish List</a> <a href="#" class="compare_button" title="Add to Compare">Add to Compare</a>--> 
               
            </div>
            <div class="clear"></div>
        </div>
        <!-- END OF PRODUCT INFO -->

        <div id="content">
            <div class="box">
                <h2 class="heading-title"><span>Description</span></h2>
                <div class="box-content">
                    <p><?php echo $product_by_id->product_description;?></p>
                </div>
            </div>

            <div class="cat_list">
                <h2 class="heading-title"><span>Related Products</span></h2>
                <?php
					foreach ($related_product as $l_product) {
                ?> 
                    <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url(); ?>front/front/product_details/	<?php echo $l_product->product_id."/";?><?php echo $l_product->category_id;?>">
                            <span class="image"><img src="<?php echo base_url() . $l_product->product_image; ?>" alt="Spicylicious store" /></span>
							</a>
							<div class="pricetag_small"> <span class="new_price"><?php echo $l_product->product_price; ?></span> </div>
							<div class="info">
								<h3><?php echo $l_product->product_name;?></h3>
								<p><?php echo $l_product->product_description;?></p>
								<form action="<?php echo base_url();?>front/cart/add_to_cart" method="post">
									<input type="hidden" value="1" size="2" name="quantity" id="qty"/>
									<input type="hidden" name="product_id" value="<?php echo $l_product->product_id; ?>">
									<!--<a class="add_to_cart_small" href="#">Add to cart</a>-->
									<input type="submit" value="Add to Cart" >
									<!--<a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>-->
								</form>
							</div>
                    </div>
					<?php } ?>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!-- END OF CONTENT --> 
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

        $("a.comment_switch").toggle(function () {
            $(this).addClass("swap");
            $(".box-rating").fadeOut("fast", function () {
                $(this).fadeIn("fast").addClass("box-review");
            });
        }, function () {
            $(this).removeClass("swap");
            $(".box-rating").fadeOut("fast", function () {
                $(this).fadeIn("fast").removeClass("box-review");
            });
        });

    });
</script>