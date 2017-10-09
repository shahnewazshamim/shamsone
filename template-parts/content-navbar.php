<?php
/**
 * The template part for displaying navigation content.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="nav-bar-area">
	<!--Top Nav Bar-->
	<div class="container">
		<div class="row">
			<nav class="navbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<!-- Your Logo Here-->
					<a href="#" class="navbar-brand">
						<img src="<?php echo DIR_SHAMS_ONE_IMG . 'logo.png' ?>" alt=""/>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right" id="nav">
						<li class="current"><a href="#home">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#resume">RESUME</a></li>
						<li><a href="#services">SERVICES</a></li>
						<li><a href="#projects">WORK</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>