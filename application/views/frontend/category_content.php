<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="<?php echo base_url(); ?>">Home</a> » Desktops </div>
        
        
        <div class="product-filter">
            <div class="product-compare"><a href="#" id="compare_total">Product Compare (0)</a></div>
            <div class="limit"><b>Show:</b>
                <select>
                    <option value="" selected="selected">8</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">75</option>
                    <option value="">100</option>
                </select>
            </div>
            <div class="sort"><b>Sort By:</b>
                <select>
                    <option value="" selected="selected">Default</option>
                    <option value="">Name (A - Z)</option>
                    <option value="">Name (Z - A)</option>
                    <option value="">Price (Low &gt; High)</option>
                    <option value="">Price (High &gt; Low)</option>
                    <option value="">Rating (Highest)</option>
                    <option value="">Rating (Lowest)</option>
                    <option value="">Model (A - Z)</option>
                    <option value="">Model (Z - A)</option>
                </select>
            </div>
        </div>

        <!-- LEFT COLUMN -->
        <div id="column-left">
            <div class="box">
                <h3 class="heading-title"><span>Categories</span></h3>
                <div class="box-content box-category">
                    <ul>
                        <?php foreach ($all_category as $v_category) { ?>

                        <li><a href="<?php echo base_url();?>front/front/category/<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></a></li>
                        <?php }?>
                        </ul>
                    </div>
                </div>
                
            </div>
            <!-- END OF LEFT COLUMN -->

            <div id="content" class="content-column-left">
                <div class="cat_list fixed">
                       <?php foreach ($product_by_category as $product) {?> 
					    
                    <div class="prod_hold"> 
						<a class="wrap_link" href="<?php echo base_url();?>front/front/product_details/<?php  echo $product->		 product_id."/";?><?php echo $product->category_id;?>">					
								<span class="image"><img src="<?php echo base_url().$product->product_image;?>" alt="Spicylicious store" /></span>
						</a>
                        <div class="pricetag_small"> <span class="new_price"><?php echo $product->product_price .' tk';?></span> </div>
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
                    <?php } ?>	
                    					
                <div class="clear"></div>
            </div>
            <div class="pagination">
                <div class="links"> <b>1</b> <a href="#">2</a> <a href="#">&gt;</a> <a href="#">&gt;|</a> </div>
                <div class="results">Showing 1 to 12 of 23 (2 Pages)</div>
            </div>
        </div>
    </div>
</div>