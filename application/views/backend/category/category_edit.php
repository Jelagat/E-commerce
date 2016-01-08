
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
            <h2><i class="icon-edit"></i> Edit Category</h2>

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
            <form name="category_edit" class="form-horizontal" action="<?php echo base_url(); ?>super_admin/category/category_update" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" err="Enter valide category name...."  name="category_name" 
								required value="<?php echo $category_info->category_name?>">
							<input type="hidden" class="span6 typeahead" id="typeahead"  name="category_id"  value="<?php echo $category_info->category_id?>">

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea name="category_description" class="cleditor" id="textarea2" rows="3"><?php echo $category_info->category_description?></textarea>
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
	document.forms['category_edit'].elements['publication_status'].value='<?php echo $category_info->publication_status?>';
</script>