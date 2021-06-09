<?php require_once 'header.php'; ?>

<?php 
	$to = 'masudrana.munna@yahoo.com';
	$subject = 'test message';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// get the value in form field.
		$name         = trim($_POST['name']);
		$mail_from    = trim($_POST['email']);
		$message      = trim($_POST['message']);
		$contact_math = trim($_POST['contact_math']);
		$contact_sum  = trim($_POST['contact_sum']);
		$body = <<<EMAIL
			Hi! My name is $name
			$message 
			From:$name
			Email:$mail_from;
EMAIL;

		$errors = array();
		// check value from the text field.
		if (empty($name) || empty($mail_from) || empty($message)) {
			$errors[] = 'Please enter your name, email & message here.';
		}else if(!filter_var($mail_from, FILTER_VALIDATE_EMAIL)){
			$errors[] = 'Your email is not vaild.';
		}else if($contact_math != $contact_sum){
			$errors[] = 'Could not match your summation';
		}else{
			mail($to, $subject, $body, "From: $mail_from");
		}
	}
?>
<div class="row">
	<div class="span12">
		<div class="row">
			<div class="span6">
				<h3 class="contact">Contact with us</h3>
				<?php if (isset($errors)) : ?>
					<?php if (!empty($errors)) : ?>

						<?php foreach($errors as $error) : ?>
							<div class="alert alert-error">
								<a href="" class="close" data-dismiss="alert">&times;</a>
								<p><?php echo $error; ?></p>
							</div> <!--  .alert alert-error  -->
						<?php endforeach; ?>
								
					<?php else : ?>
						<div class="alert alert-success">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p><?php echo '<strong>Well done!</strong> E-mail send successfully.'; ?></p>
						</div> <!--  .alert alert-success  -->
					<?php endif; ?>
				<?php endif ?>
				<form action="" class="form-horizontal" id="form" method="post">
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input type="text" name="name" placeholder="Your Name" onfocus="if(this.placeholder == 'Your Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Your Name'}" class="span4">
						</div> <!--  .controls  -->
					</div> <!--  .controls-group  -->

					<div class="control-group">
						<label class="control-label">Email</label>
						<div class="controls">
							<input type="text" name="email" placeholder="email@domain.com" onfocus="if(this.placeholder=='email@domain.com'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='email@domain.com'}" class="span4">
						</div> <!--  .controls  -->
					</div> <!--  .controls-group  -->
					
					<div class="control-group">
						<label class="control-label">Message</label>
						<div class="controls">
							<textarea name="message" cols="30" rows="10" placeholder="Your message write here..." onfocus="if(this.placeholder=='Your message write here...'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Your message write here...'}" class="span4"></textarea>
						</div> <!--  .controls  -->
					</div> <!--  .controls-group  -->

					
					<div class="control-group">
						<label class="control-label humen-test">Are you humen ?</label>
						<div class="controls">
							<?php 
								$first  = rand(1,9);
								$second = rand(1,9);
							?>

							<input type="text" name="contact_math" value="" placeholder="<?php printf(" %d + %d = ?", $first, $second ); ?>" class="span4" >
						</div> <!--  .controls  -->
					</div> <!--  .controls-group  -->

					<div class="control-group">
						<div class="controls">
							<input type="hidden" name="contact_sum" value="<?php echo $first + $second; ?>" >
							<input type="submit" name="submit" value="Send Message" class="btn btn-inverse">
						</div> <!--  .controls  -->
					</div> <!-- .control-group -->
				</form> <!--  .form-horizontal -->
			</div> <!--  .span6 -->

			<div class="span6">
				<div class="row">
					<div class="span3">
						<h3 class="contact">Address</h3>
						<address class="address">
							<p>149/3 Arambagh (2nd Floor)</p>
							<p>Motijheel C/A, Dhaka - 1000.</p>
						</address> <!-- .address -->
					</div> <!--  .span3  -->

					<div class="span3">
						<h3 class="contact">Mobile</h3>
						<span class="address">
							<p>+8801713 - 453422</p>
							<p>+8801613 - 453422</p>
						</span> <!-- .address -->
					</div> <!-- .span3  -->
				</div> <!-- .row  -->

				<div id="myMap" style="width:370px; height:300px;" class="thumbnail"></div>				
			</div> <!-- .span6  -->
		</div> <!-- .row  -->
	</div> <!-- .span12   -->
</div> <!-- .row   -->
<?php require_once 'footer.php'; ?>