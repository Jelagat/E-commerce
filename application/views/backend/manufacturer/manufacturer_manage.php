<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Manufacturer Id</th>
                <th>Manufacturer Name</th>
                <th>Publication Status</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach($all_manufacturer as $v_manufacturer)
            {
            ?>
            <tr>
                <td><?php  echo $v_manufacturer->manufacturer_id  ?></td>
                <td class="center"><?php  echo $v_manufacturer->manufacturer_name  ?></td>
                <td class="center">
				<?php
				   if ($v_manufacturer->publication_status == 1)
				   {
					  echo 'Published';
				   } 
				   else
				   {
					  echo 'Unpublished';
				   }
                 ?>
				 </td>
                <td class="center">
                    <?php
                        if ($v_manufacturer->publication_status == 0)
						{
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>super_admin/manufacturer/manufacturer_published/<?php echo $v_manufacturer->manufacturer_id ?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  

                    </a>
                    <?php
						}
						else
						{
                    ?>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/manufacturer/manufacturer_unpublished/<?php echo $v_manufacturer->manufacturer_id ?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  

                    </a>
                    <?php 
						} 
					?>
                    <a class="btn btn-info" href="<?php echo base_url(); ?>super_admin/manufacturer/manufacturer_edit/<?php echo $v_manufacturer->manufacturer_id  ?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  

                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>super_admin/manufacturer/manufacturer_delete/<?php echo $v_manufacturer->manufacturer_id  ?>" title="Delete" onclick="return check_delete();">
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