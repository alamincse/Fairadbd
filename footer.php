				<div class="footer">
					<div class="row">
						<div class="span3">
							<h3 class="contact-us">Get in Touch</h3>
							<div class="info-fairadbd">
								<p>Md. Mamunur Rashid</p>
								<p>Proprietor at <a href="index.php">Fairadbd</a>.</p>
								<p>Mobile : <span class="mobile">01713-453422</span></p>
								<p>E-mail : <span class="email">info@fairadbd.com</span></p>								
								<p><span class="contact-office">Our Office &amp; Factory</span></p>
								<p>149/3 Arambagh (2nd Floor)</p>
								<p>Motijheel C/A, Dhaka - 1000</p>
							</div> <!-- .info-fairadbd -->
						</div> <!-- .span3 -->

						<div class="span2">
							<h3 class="mission">Our Mission</h3>
							<ul class="mission-nav">
								<li><a href="#">Excellent customer service</a></li>
								<li><a href="#">Good team work with positive attitude.</a></li>
								<li><a href="#">Offering outstanding quality accessories</a></li>
								<li><a href="#">Faster delivery.</a></li>
								<li><a href="#">Effective and professional service</a></li>
							</ul> <!-- .mission-nav -->
						</div> <!-- .span2 -->

						<div class="span4">
							<h3 class="more-info">More Information</h3>
							<ul class="more-info-nav">
								<li><i class="icon-circle-arrow-right"></i><a href="product/ribon.php">Ribbon</a></li>
								<li><i class="icon-circle-arrow-right"></i><a href="product/hook.php">Hook</a></li>
								<li><i class="icon-circle-arrow-right"></i><a href="#">All Product</a></li>
								<li><i class="icon-circle-arrow-right"></i><a href="product/button.php">Batton Image</a></li>
								<li><i class="icon-circle-arrow-right"></i><a href="product/photo_board.php">Photo Board</a></li>
								<li><i class="icon-circle-arrow-right"></i><a href="about.php">About Fairadbd</a></li>
							</ul> <!-- .more-info-nav  -->
						</div> <!-- .span4 -->

						<div class="span3">
							<h3 class="product">Our Products</h3>
							<marquee scrollamount = "3" onmouseover = "this.stop();" onmouseout = "this.start();" direction="up" class="item-service">
								<ol class="item-nav">
									<li><a href="product/button.php">Batton</a></li>
									<li><a href="product/barcode_label.php">Oven label</a></li>
									<li><a href="product/care_lable">Printed Care Lable (Satin & Paper)</a></li>
									<li><a href="product/size_label.php">Printed Size Lable (Satin & Paper)</a></li>
									<li><a href="product/barcode_label.php">Printed Barcode Lable (Satin & Paper)</a></li>
									<li><a href="product/barcode_label.php">Printed Fabric Lable (Satin & Paper)</a></li>
									<li><a href="product/barcode_label.php">Printed Lacher Patch</a></li>
									<li><a href="product/barcode_label.php">Printed Price Tag </a></li>
									<li><a href="product/hang_tag.php">Printed Hang Tag</a></li>
									<li><a href="product/barcode_label.php">Printed Dicard window Boxes</a></li>
									<li><a href="product/barcode_label.php">Printed pocket Flashers</a></li>
									<li><a href="product/photo.php">Printed Photo Layer s</a></li>
									<li><a href="product/pricetag.php">Printed  Head Cards</a></li>
									<li><a href="product/pricetag.php">Printed Boxr Bands</a></li>
									<li><a href="product/sticker.php">Printed Barcode Stickers</a></li>
									<li><a href="product/sticker.php">Printed Poly Stickers</a></li>
									<li><a href="product/sticker.php">Printed Cartoon Stickers</a></li>
									<li><a href="product/twill_tape">Printed Twill Tape</a></li>
									<li><a href="product/twill_tape">Twill Tape</a></li>
									<li><a href="product/elastic.php">Elistic Bands</a></li>
									<li><a href="product/hook.php">Hook</a></li>
									<li><a href="product/laces.php">Laces</a></li>
									<li><a href="product/ribon.php">Ribbon</a></li>
									<li><a href="product/velvet.php">VelVel Tape</a></li>
								</ol> <!-- .item-nav  -->
							</marquee> 
						</div> <!-- .span3  -->
					</div> <!--  row -->
				</div> <!-- .footer -->

				<div class="copyright">
					<p>
						<span>&copy; Fairadbd, all Rights Reserved.</span>
						<span class="pull-right">Developer <a href="http://facebook.com/alaminbosscseru09" target="_blank">AL-AMIN</a></span>
					</p>
				</div> <!-- .copyright  -->


				<div class="row">
					<div class="span2 offset10">
						<p class="back-to-top">
							<a href="#top"><i class="icon-circle-arrow-up icon-white back-top"></i>&nbsp;&nbsp;Top</a>
						</p> <!--  .back-to-top  -->
					</div> <!--  .span2 offset10  -->
				</div> <!--  .row  -->
			</div> <!-- .span12 content -->
		</div> <!-- .row -->
	</div> <!-- .container -->

	<!-- javaScript -->
	<script type="text/javascript" src="assets/js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="assets/js/chili-1.7.pack.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	<script type="text/javascript">

		// Slider jQuery
		$('#slider').cycle({ 
		    fx: 'scrollHorz', 
		    prev:'#prev', 
		    next:'#next', 
		    timeout:10 
		});

		// back to top option
		$(document).ready(function(){

			// hide .back-to-top first
			$(".back-to-top").hide();
			
			// fade in .back-to-top
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						$('.back-to-top').fadeIn();
					} else {
						$('.back-to-top').fadeOut();
					}
				});

				// scroll body to 0px on click
				$('.back-to-top a').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			});

		});


		// google map .........
		var myCenter=new google.maps.LatLng(23.729408,90.417436);

		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:15,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("myMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
		  content:"Our Fairadbd Company."
		  });

		infowindow.open(map,marker);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</body>
</html>
