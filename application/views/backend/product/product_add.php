
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
            <h2><i class="icon-edit"></i> Add Product</h2>

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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/product/product_save" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="product_name">Product Name(<span style="color:red">*</span>)</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="product_name" err="Enter valide product name...."  name="product_name" required >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError">Category Name</label>
                        <div class="controls">
                            <select name="category_id" data-rel="chosen" id="category_id">
                                <option>Select Category</option>
                                <?php
                                foreach ($all_published_category as $v_category) {
                                    ?>
                                    <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError">Manufacturer Name</label>
                        <div class="controls">
                            <select name="manufacturer_id" data-rel="chosen" id="manufacturer_id">
                                <option>Select Manufacturer</option>
                                <?php
                                foreach ($all_published_manufacturer as $v_manufacturer) {
                                    ?>
                                    <option value="<?php echo $v_manufacturer->manufacturer_id; ?>"><?php echo $v_manufacturer->manufacturer_name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="product_description">Product Description</label>
                        <div class="controls">
                            <textarea name="product_description" class="cleditor" id="product_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="product_image">Product Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="product_image" type="file" name="product_image">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="product_price">Product Price (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="product_price"   name="product_price" required >
                        </div>
                    </div>	
                    <div class="control-group">
                        <label class="control-label" for="product_quantity">Product Quantity(<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="number" class="span6 typeahead" id="product_quantity"   name="product_quantity" required >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Featured Product</label>
                        <div class="controls">
                            <input type="checkbox" id="featured_product" err="Please Select featured product"  exclude=" "  name="featured_product" value="1">								  
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="created_date_time">Created Date(<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="date" class="span6 typeahead" id="created_date_time"   name="created_date_time" required >
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