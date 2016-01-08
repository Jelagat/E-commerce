<div class="inner">
    <div id="content">
        <div class="box featured-box">
            <h2 class="heading-title"><span>Featured Products</span></h2>			
            <div class="box-content">		
			
                <ul id="myRoundabout">
				<?php foreach($featured_product as $v_product) { ?>	
                    <li>
                        <div class="prod_holder"> <a href="<?php echo base_url();?>front/front/product_details/<?php echo $v_product->product_id."/";?><?php echo $v_product->category_id;?>"> <img src="<?php echo base_url().$v_product->product_image;?>" alt="Spicylicious store" /> </a>
                            <h3><?php echo $v_product->product_name;?></h3>
                        </div>
                        <span class="pricetag"><?php echo $v_product->product_price;?></span> 
					</li>               
				 <?php } ?>	
                </ul>	
							

                <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>
        </div>
        <div class="box">
            <h2 class="heading-title"><span>Welcome to Spicylicious</span></h2>			
            <div class="box-content">
			<?php 
				$val = $this->db->get_where('tbl_about')->result_array();
				foreach($val as $row){
			?>
                <p><?php echo $row['welcome_msg'];?></p>
			<?php } ?>
            </div>
        </div>
        <div class="box">
            <div class="banner">
                <div><a href="#"><img src="<?php echo base_url(); ?>template/frontend/image/banner1.jpg" alt="Spicylicious store" /></a></div>
                <div><a href="#"><img src="<?php echo base_url(); ?>template/frontend/image/banner2.jpg" alt="Spicylicious store" /></a></div>
            </div>
        </div>
        <div class="box">
            <h2 class="heading-title"><span>Latest Products</span></h2>
            <div class="box-content">
                <div class="box-product fixed">
				<?php 
						foreach($all_product as $product){
				?>
                    <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url();?>front/front/product_details/<?php echo $product->product_id."/";?><?php echo $product->category_id;?>"> <span class="image"><img src="<?php echo base_url().$product->product_image; ?>" alt="Spicylicious store" /></span> </a>
                        <div class="pricetag_small"><span class="new_price"><?php echo $product->product_price;?></span> </div>
                        <div class="info">
                            <h3><?php echo $product->product_name;?></h3>
                            <p><?php echo $product->product_description;?></p>
							<form action="<?php echo base_url();?>front/cart/add_to_cart" method="post">
								<input type="hidden" value="1" size="2" name="quantity" id="qty"/>
								<input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>">
								<!--<a class="add_to_cart_small" href="#">Add to cart</a>-->
								<input type="submit" value="Add to Cart" >
								<!--<a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>-->
							</form>
						</div>
					</div>
				 <?php }?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
