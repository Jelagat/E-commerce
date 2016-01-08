<div class="inner">
<div class="breadcrumb"> <a href="<?php echo base_url();?>">Home</a> » About us </div>
<h2 class="heading-title"><span>About Spicylicious</span></h2>

<!-- LEFT COLUMN -->
<div id="column-left">
    <div class="box">
        <h3 class="heading-title"><span>Information</span></h3>
        <div class="box-content box-category">
            <ul>
                <li><a class="active" href="<?php echo base_url(); ?>front/front/category">Category</a></li>
				<li><a href="<?php echo base_url();?>contact_us">Contact Us</a></li>
              <!--  <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms and conditions</a></li>
                
                <li><a href="#">site map</a></li>-->
            </ul>
        </div>
    </div>
   <!-- <div class="box">
        <h3 class="heading-title"><span>Categories</span></h3>
        <div class="box-content box-category">
            <ul>
			
                <li><a href="#">pizza(2)</a></li>
                <li><a href="category.html">Lasagna (6)</a></li>
                <li><a class="active" href="category.html">Spaghetti (7)</a>
                    <ul>
                        <li><a href="category.html">Subcat 1</a></li>
                        <li><a href="category.html">Subcat 2</a></li>
                        <li><a href="category.html">Subcat 3</a></li>
                    </ul>
                </li>
                <li><a href="category.html">Penne (4)</a></li>
                <li><a href="category.html">Canelonni (3)</a></li>
                <li><a href="category.html">Fettuchini (13)</a></li>
                <li><a href="category.html">Risotto (5)</a></li>
                <li><a href="category.html">Antipasti (29)</a></li>
                <li><a href="category.html">Bar-B-Q (18)</a></li>
                <li><a href="category.html">Desserts (15)</a></li>
				
            </ul>
        </div>
    </div>-->
</div>
<!-- END OF LEFT COLUMN -->

<div id="content" class="content-column-left">
    <div class="content info-page">
		<?php 
			$val = $this->db->get_where('tbl_about')->result_array();
			foreach($val as $row){
		?>
        <p><?php echo $row['about_description'];?></p>
		<?php } ?>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
</div>

<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script> 
<script type="text/javascript"><!--
$(function() {
		$( "#accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});
//--></script>