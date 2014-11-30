<?php include_once('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>AJAX Contact Form</title>
<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->

</head>

<body>

	<div id="contact">

			<h1><?php echo TITLE; ?></h1>
			<p><?php echo DESCRIPTION; ?></p>

			
			<!--<form method="post" action="" name="contactform" id="contactform"> -->

			<fieldset  name="contactform" id="contactform">

			<legend>Please fill in the following form</legend>
			
			<div id="result"></div> <br>

			<label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
			<input name="name" type="text" id="name" size="30" value="" />

			<br />
			<label for="email" accesskey="E"><span class="required">*</span> Email</label>
			<input name="email" type="text" id="email" size="30" value="" />

			<br />
			<label for="phone" accesskey="P"><span class="required">*</span> Phone</label>
			<input name="phone" type="text" id="phone" size="30" value="" />

			<br />
			<label for="subject" accesskey="S"><span class="required">*</span> Subject </label>
			<input name="subject" type="text" id="subject" size="30" value="" />

			<br />
			<label for="comments" accesskey="C"><span class="required">*</span> Your comments</label>
			<textarea name="comments" cols="40" rows="3" id="comments" style="width: 350px;"></textarea>

			<p><span class="required">*</span> Are you human?</p>
			<?php 
				$a = rand(0,9);
				$b = rand(0,9);
				$c = $a + $b;
			?>

			<label for="verify" accesskey="V">&nbsp;&nbsp;&nbsp; <?php echo $a ?> + <?php echo $b; ?> =</label>
			<input name="verify" type="text" id="verify" size="4" value="" style="width: 30px;" /><br /><br />
			<input type="hidden" name="cap" value="<?php echo $c; ?>" />

			 <button class="submit_btn" id="submit_btn">Submit</button>

			</fieldset>

			<!-- </form> -->

	</div>

</body>
</html>
