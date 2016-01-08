<div class="inner">
      <div class="breadcrumb"> <a href="<?php echo base_url();?>">Home</a> » Contact Us </div>
      <h2 class="heading-title"><span>Contact Us</span></h2>
      
      <!-- LEFT COLUMN -->
      <div id="column-left">
        <div class="box">
          <h3 class="heading-title"><span>Our Location</span></h3>
          <div class="box-content box-contact-details">
            <ul>
			<?php 
				$val = $this->db->get_where('tbl_about')->result_array();
				foreach($val as $row){
			?>
              <li class="address"> <span>Address:</span><br />
                <?php echo $row['address'];?><br />
              </li>
              <li class="phone"> <span>Telephone:</span><br />
                <?php echo $row['telephone'];?>
			  </li>
              <li class="fax"> <span>Fax:</span><br />
                <?php echo $row['fax'];?>
			  </li>
				<?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="content contacts-page">
          <div class="box-contacts fixed">
            <div class="box-content">
			
			<div class="stitched"></div>
			<h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
			<div class="form">			
				<form class="form-horizontal" action="<?php echo base_url(); ?>front/front/send_email" method="post" onsubmit="return validateStandard(this)">			  
			  <span class="label">Your Name:</span>
                <input type="text" value="" name="name" required/>
                <br/>
                <br/>
                <span class="label">E-mail Address:</span>
                <input type="text" value="" name="mail" required/>
                <br/>
                <br/>
                <span class="label">Message:</span>
                <textarea style="width: 98%;" rows="10" cols="40" name="msg" required></textarea>
                <br/>
                <br/>
				<div class="form-actions ">
					<input type="submit" class="btn btn-primary" value="Submit"/>
				</div>
			  </form>
			  </div>
			  <div class="stitched"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
</div>