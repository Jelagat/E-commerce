<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Publication Status</th>
				<th>Featured Product</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach($all_product as $v_product)
            {
            ?>
            <tr>
                <td><?php  echo $v_product->product_id  ?></td>
                <td class="center"><?php echo $v_product->product_name  ?></td>
                <td class="center">
				<?php
					if ($v_product->publication_status == 1) {
						echo 'Published';
				   } else {
					   echo 'Unpublished';
				   }
                ?>
				</td>
				<td class="center">
				<?php
					if ($v_product->featured_product == 1) {
						echo 'Featured';
				   } else {
					   echo 'Unfeatured';
				   }
                ?>
				</td>
                <td class="center">
				<!--published or not-->
				<?php
					if ($v_product->publication_status == 0) {
				?>
					<a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/product/product_published/<?php echo $v_product->product_id ?>" title="Published">
						<i class="icon-arrow-up icon-white"></i>  
					</a>
				<?php
					} 
					else
					{
                ?>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/product/product_unpublished/<?php echo $v_product->product_id ?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                    </a>
				<?php 
					}
				?>
				<!--feactured or not-->
				<?php
					if ($v_product->featured_product == 0) {
				?>
					<a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/product/product_featured/<?php echo $v_product->product_id ?>" title="Featured">
						<i class="icon-arrow-up icon-white"></i>  
					</a>
				<?php
					} 
					else
					{
                ?>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/product/product_unfeatured/<?php echo $v_product->product_id ?>" title="Unfeatured">
                        <i class="icon-arrow-down icon-white"></i>  
                    </a>
				<?php 
					}
				?>
                    <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/product/product_edit/<?php echo $v_product->product_id  ?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/product/product_delete/<?php echo $v_product->product_id  ?>" title="Delete" onclick="return check_delete();">
                        <i class="icon-trash icon-white"></i> 

                    </a>
                </td>
            </tr>
            <?php
				} 
			?>
        </tbody>
    </table>            
</div>