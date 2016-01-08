
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Manufacturer</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form class="form-horizontal" name="edit_manufacturer" action="<?php echo base_url(); ?>super_admin/manufacturer/manufacturer_update" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="manufacturer_name">Manufacturer Name (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="manufacturer_name" err="Enter valide manufacturer name...."  name="manufacturer_name" 
								required value="<?php echo $manufacturer_info->manufacturer_name?>">
							<input type="hidden" class="span6 typeahead" id="typeahead"  name="manufacturer_id"  value="<?php echo $manufacturer_info->manufacturer_id?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="manufacturer_description">Manufacturer Description</label>
                        <div class="controls">
                            <textarea name="manufacturer_description" class="cleditor" id="manufacturer_description" rows="3"><?php echo $manufacturer_info->manufacturer_description?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
						<label class="control-label" for="selectError">Publication Status</label>
						<div class="controls">
						  <select name="publication_status" err="Please Select Publication Status" required exclude=" " data-rel="chosen">
							<option value=" ">Select Publication Status</option>
							<option value="1">Published</option>
							<option value="0">Un Published</option>
						  </select>
						</div>
					</div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->


<script type="text/javascript">
	document.forms['edit_manufacturer'].elements['publication_status'].value='<?php echo $manufacturer_info->publication_status?>';
</script>