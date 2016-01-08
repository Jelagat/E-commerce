
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">About</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update About</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
           
        </h3>
        <div class="box-content">
			<?php 
				$val = $this->db->get_where('tbl_about')->result_array();
				foreach($val as $row){
			?>
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/about/about_us/do_update" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="product_name">Address(<span style="color:red">*</span>)</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="address" err="Enter valide product name...."  name="address" value="<?php echo $row['address'];?>" required >
							
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="product_description">Description</label>
                        <div class="controls">
                            <textarea name="about_description" class="cleditor" id="about_description" rows="3"><?php echo $row['about_description'];?></textarea>
                        </div>
                    </div>
                    
					<div class="control-group">
                        <label class="control-label" for="product_description">Welcome Message</label>
                        <div class="controls">
                            <textarea name="welcome_msg" class="cleditor" id="welcome_msg" rows="3"><?php echo $row['welcome_msg'];?></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="product_price">Telephone (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="telephone"   name="telephone" value="<?php echo $row['telephone'];?>" required >
                        </div>
                    </div>	
                    <div class="control-group">
                        <label class="control-label" for="product_price">Fax (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="fax"   name="fax" value="<?php echo $row['fax'];?>" required >
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   
		<?php }	?>
        </div>
    </div><!--/span-->

</div><!--/row-->