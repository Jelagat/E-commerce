<!-- CONTENT -->
  <div id="content_holder">
    <div class="inner">
      <div class="breadcrumb"><a href="<?php echo base_url();?>">Home</a> » <a href="<?php echo base_url();?>account">Account</a> » Wish List</div>
      <h2 class="heading-title"><span>My Wish List</span></h2>
      
      <!-- RIGHT COLUMN -->
      <div id="column-right">
        <div class="box">
          <h3 class="heading-title"><span>My Account</span></h3>
          <div class="box-content box-account">
            <ul>
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Forgotten Password</a></li>
              <li><a href="<?php echo base_url();?>account">My Account</a></li>
              <li><a class="active" href="#">Wish List</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Transactions</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END OF RIGHT COLUMN -->
      
      <div id="content" class="content-column-right">
        <div class="wishlist-product">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                <td class="model">Model</td>
                <td class="stock">Stock</td>
                <td class="price">Unit Price</td>
                <td class="cart">Buy Now</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="remove"><input type="checkbox" value="44" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>template/frontend/image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Product name</a></td>
                <td class="model">Product 17</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $1,175.00 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('44');"><span>Add to Cart</span></a></td>
              </tr>
              <tr>
                <td class="remove"><input type="checkbox" value="46" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>template/frontend/image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Long product name</a></td>
                <td class="model">Product 19</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $1,175.00 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('46');"><span>Add to Cart</span></a></td>
              </tr>
              <tr>
                <td class="remove"><input type="checkbox" value="48" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>template/frontend/image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Extremely long product name goes here</a></td>
                <td class="model">product 20</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $117.50 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('48');"><span>Add to Cart</span></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <div class="left"><a class="button" href="http://metagraphics.eu/cartmania1_5/index.php?route=account/account"><span>Back</span></a></div>
          <div class="right"><a class="button" onclick="$('#wishlist').submit();"><span>Update</span></a></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>

<!-- END OF CONTENT --> 
