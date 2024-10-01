<?php include ('includes/header.php'); ?>
<div>
	<!--Page Title-->
	<section class="page-title" style="background-image:url(images/resource-1/contact--bg.jpg)">
		<div class="auto-container">
			<div class="content">
				<h1>Contact <span>us</span></h1>
				<h4 class="title pt-2  text-center">Reach out to us for unparalleled service and <br> expert guidance.
				</h4>
			</div>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">

		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer auto-container">
				<!--Map Canvas-->
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.428797486099!2d-88.05778112341208!3d41.9696025596794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fac33cfefffff%3A0x2d667cd36067ee69!2sJD%20Gurus!5e0!3m2!1sen!2sin!4v1705988127519!5m2!1sen!2sin"
					width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

		<div class="auto-container mt-5 mb-5">
			<div class="inner-container">
				<h2>Contact our support guys or make appointment <br> with <span>our consultant</span></h2>
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information
								on our management consulting services, please visit the appropriate page on our site.
							</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span>6N381 Acacia Ln, Medinah, <br> IL, United
									States, Illinois</li>
								<li><span class="icon fa fa-fax"></span> +1 630-523-9796</li>
								<li><span class="icon fa fa-envelope-o"></span>info@jdgurus.com</li>
							</ul>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							<!--Contact Form-->
							<div class="contact-form">
								<form id="contact-form1" action="contact-us.php" method="POST">
									<div class="form-group">
										<input type="text" name="firstname" id="name" value="" placeholder="Full name"
											required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" value="" placeholder="Email"
											required>
									</div>
									<div class="form-group">
										<input type="text" name="number" id="number" value="" placeholder="Phone Number"
											required>
									</div>
									<div class="form-group">
										<input type="text" name="Product" id="Product" value="" placeholder="Product"
											required>
									</div>
									<div class="form-group">
										<input type="text" name="IndustryType" id="IndustryType" value=""
											placeholder="Industry Type" required>
									</div>
									<div class="form-group">
										<input type="text" name="BusinessName" id="BusinessName" value=""
											placeholder="Business Name" required>
									</div>
									<div class="form-group">
										<textarea name="message" id="massage"
											placeholder="Write your message.."></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="theme-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->

</div>
<script src="js/main.js"></script>

<?php include ('includes/footer.php'); ?>

<!--End pagewrapper-->