<?php
/**
 * The template part for displaying section contact.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section id="contact" class="section section-padding contact">
	<!--Page Header-->
	<div class="container">
		<div class="row section-header">
			<h2>
				SAY HELLO TO ME
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit
			</p>
		</div>
	</div>
	<!--Page Content-->
	<div class="contact-content">
		<div id="gmap" class="" data-map-latitude="40.6700" data-map-longitude="-73.9400">
			<!--Google Map will Be Shown Here-->
		</div>
		<div class="container">
			<div class="row contact-main-content">
				<!--Contact Form-->
				<div class="col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 contact-form">
					<form class="ct-form" id="ct-form" method="post" action="http://ebepari.com/templates/boch/mailer.php">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-xs-12">
								<div class="form-group">
									<i class="icon pe-7s-users"></i>
									<input name="name" id="name" required="" placeholder="Name" class="form-control" type="text">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xs-12">
								<div class="form-group">
									<i class="icon pe-7s-paper-plane"></i>
									<input name="email" id="email" placeholder="Email" required="" class="form-control" type="email">
								</div>
							</div>
						</div>
						<div class="row form-group txt-area">
							<div class="col-lg-12">
								<i class="icon left-b pe-7s-note"></i>
								<textarea name="msg" id="msg" class="form-control" placeholder="Message!"></textarea>
							</div>
						</div>
						<button class="btn btn-boch btn-colored post-btn">Send Message</button>
					</form>
					<div id="form-messages"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Contact Detail Item-->
	<div class="contact-detail-item section-padding solid-bg">
		<div class="container">
			<div class="row">
				<!--Single Contact Info-->
				<div class="col-md-3 col-sm-6 single-contact-detail">
					<div class="header">
						<i class="pe-7s-paper-plane"></i>
						<h4>ADDRESS</h4>
					</div>
					<p>123, Jakson Height, NYC Street B612 Sylhet, Bangladesh</p>
				</div>
				<!--Single Contact Info-->
				<div class="col-md-3 col-sm-6 single-contact-detail">
					<div class="header">
						<i class="pe-7s-mail-open"></i>
						<h4>EMAIL</h4>
					</div>
					<p>contact-support@mail.com<br>another@mail.com</p>
				</div>
				<!--Single Contact Info-->
				<div class="col-md-3 col-sm-6 single-contact-detail">
					<div class="header">
						<i class="pe-7s-phone"></i>
						<h4>MOBILE</h4>
					</div>
					<p>0177 7536213 44<br>(440) 7985 12369</p>
				</div>
				<!--Single Contact Info-->
				<div class="col-md-3 col-sm-6 single-contact-detail">
					<div class="header">
						<i class="pe-7s-world"></i>
						<h4>WEBSITE</h4>
					</div>
					<p>http://www.domainname.com <br> http://www.website.com</p>
				</div>
			</div>
		</div>
	</div>
</section>

