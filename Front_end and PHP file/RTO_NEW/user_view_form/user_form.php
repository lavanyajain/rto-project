<!DOCTYPE HTML>
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="common/js/form_init.js" id="form_init_script"
    data-name="">
    </script>
    <link rel="stylesheet" type="text/css" href="css/default.css"
    id="theme" />
    <title>
    </title>
	<?php
	include 'trydisplay.php';
	?>
  </head>
  
  <body><style>#docContainer .fb_cond_applied{ display:none; }</style><noscript><style>#docContainer .fb_cond_applied{ display:inline-block; }</style></noscript><form class="fb-toplabel fb-100-item-column selected-object" id="docContainer"
action="" enctype="multipart/form-data" method="POST" novalidate="novalidate"
data-form="preview">
  <div class="fb-form-header" id="fb-form-header1" style="min-height: 0px;">
    <a class="fb-link-logo" id="fb-link-logo1" target="_blank"><img title="Alternative text" class="fb-logo" id="fb-logo1" style="display: none;" alt="Alternative text" src=""/></a>
  </div>
  <div class="section" id="section1">
    <div class="column ui-sortable" id="column1">
      <div class="fb-item fb-100-item-column" id="item1">
        <div class="fb-header fb-item-alignment-center">
          <h2 style="display: inline;">
            User Information
          </h2>
        </div>
      </div>
<br/><br/>
<h4 align="right"><a href="http://localhost/RTO_NEW/user_view_form/delete_status.php">LOGOUT</a></h4><br/><br/>

<h4 align="left"><a href="javascript:window.print()" target="_blank">CLICK HERE FOR REPORT GENERATION</a></h4><br/><br/>

      <div class="fb-item" id="item10" style="max-width: 205px; opacity: 1;">
        <a class="fb-image" target="_top"><img title="Alternative text" id="item10_img_0" style="width: 100%;" alt="Alternative text" src="<?php include('trydisplay.php');echo $imgname;?>"/></a>
      </div>
      <div class="fb-item fb-50-item-column" id="item20" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item20_label_0" style="display: inline;">Notification</label>
        </div>
        <div class="fb-textarea">
         <font color="red"> <textarea name="notify" id="notify"  style="font-family:Cooper" style="color:#003399" style="size:24px" 
          maxlength="10000" placeholder="" data-hint="" rows="5" cols="100" style="color:#003399" disabled><?php include'notification.php';
	?></textarea></font>
        </div>
      </div>
      <div class="fb-item fb-75-item-column" id="item11">
        <div class="fb-grouplabel">
          <label id="item11_label_0" style="display: inline;">Licence Number</label>
        </div>
        <div class="fb-input-box">
          <input name="lno" id="lno" type="text" maxlength="254" placeholder=""
          autocomplete="off" data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $lno;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item5" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item5_label_0" style="display: inline;">First Name</label>
        </div>
        <div class="fb-input-box">
          <input name="fname" id="fname" type="text" maxlength="254" placeholder=""
          autocomplete="off" data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $fname;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item9">
        <div class="fb-grouplabel">
          <label id="item9_label_0" style="display: inline;">Last Name</label>
        </div>
        <div class="fb-input-box">
          <input name="lname" id="lname" type="text" maxlength="254" placeholder=""
          autocomplete="off" data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $lname;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-66-item-column" id="item13">
        <div class="fb-grouplabel">
          <label id="item13_label_0" style="display: inline;">DOB</label>
        </div>
        <div class="fb-input-date">
          <input name="date" class="datepicker" id="item13_date_1" type="text"
          data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $dob;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item15">
        <div class="fb-grouplabel">
          <label id="item15_label_0" style="display: inline;">Blood Group</label>
        </div>
        <div class="fb-input-box">
          <input name="bgrp" id="bgrp" type="text" maxlength="10" placeholder=""
          autocomplete="off" data-hint=""  value="<?php 
		  include 'trydisplay.php';
		  echo $bgrp;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item16">
        <div class="fb-grouplabel">
          <label id="item16_label_0" style="display: inline;">Address</label>
        </div>
        <div class="fb-input-box">
          <input name="addr" id="addr" type="text" maxlength="254" placeholder=""
          autocomplete="off" data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $addr;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item17">
        <div class="fb-grouplabel">
          <label id="item17_label_0">Authorised to Drive</label>
        </div>
        <div class="fb-input-box">
          <input name="adrive" id="adrive" type="text" maxlength="254" placeholder=""
          autocomplete="off" data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $adrive;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item25">
        <div class="fb-grouplabel">
          <label id="item25_label_0" style="display: inline;">Offence</label>
        </div>
        <div class="fb-textarea">
          <textarea name="offence" id="offence" style="resize: none;"
          maxlength="10000" placeholder="" data-hint="" rows="2" cols="20" disabled>
		  <?php include 'textarea.php';
		  
		  ?></textarea>
        </div>
      </div>
      <div class="fb-item fb-66-item-column" id="item19">
        <div class="fb-grouplabel">
          <label id="item19_label_0" style="display: inline;">Issue Date</label>
        </div>
        <div class="fb-input-date">
          <input name="idate" class="datepicker" id="idate" type="text"
          data-hint="" value="<?php 
		  include 'trydisplay.php';
		  echo $idate;
		  ?>" disabled />
        </div>
      </div>
      <div class="fb-item" id="item23" style="max-width: 240px;">
        <a class="fb-image"target="_blank"></a>
      </div>
    </div>
  </div>
  <div class="fb-captcha fb-item-alignment-center" id="fb-captcha_control"
  style="display: none; cursor: default;">
    <img src="editordata/images/recaptchawhite.png" />
  </div>
  <div class="fb-item-alignment-left fb-footer" id="fb-submit-button-div"
  style="min-height: 0px;">
   
    
  </div>
</form>
</body>
</html> 