	<?php include "header.php"; ?>


		<header id="home-page-image">
			<h1>Welcome To UIBrush</h1>
			<h2>We Provide Ultimate Free PSD Templates</h2>
		</header>

		<section class="small-bar">
			<div class="container">
				<h3>Lorem ipsum dolor sit amet <span>conssectetuer adipiscing elit</span></h3>
			</div>
		</section>

		<section class="uibrush">
			<div class="container">
				<div class="wrap">
					<h3><span>UIBrush</span></h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
					voluptate velit esse cillum.</p>
				</div>
			</div>	

			<div class="content-wrapper">
				<div class="container">
					<div class="skills">
						<img src="images/innovative-design.png" alt="icon">
						<h4>Innovative Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
					</div>

					<div class="skills">
						<img src="images/clean-code-icon.png" alt="icon">
						<h4>Clean Coding</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
					</div>

					<div class="skills">
						<img src="images/quick-delivery.png" alt="icon">
						<h4>Quick Delivery</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
					</div>

					<div class="skills">
						<img src="images/best-support-icon.png" alt="icon">
						<h4>Best Support</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</section>

		<section class="recent-projects">
			<div class="container">
				<div class="work">
					<h3><span>Recent Projects</span></h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eturet dolore magna aliqua.</p>
				</div>
			</div>

			<div class="portfolio-images">
				 <div class="container">
					<div class="image-text-box">
						<img src="images/funny-cat.jpg">
						<h5>Portfolio One</h5>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>

					<div class="image-text-box">
						<img src="images/teddy-bear.jpg">
						<h5>Portfolio Two</h5>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>

					<div class="image-text-box">
						<img src="images/few-cat.jpg">
						<h5>Portfolio Three</h5>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>

					<div class="image-text-box">
						<img src="images/the-golden-retriever.png">
						<h5>Portfolio Four</h5>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
			</div>
		</section>

		<?php include "footer.php"; ?>

		<!-- add jQuery here -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".fa-bars").on("click", function(){
					//console.log("It Works");
					//$(".dropdown").slideToggle(800);
					$(".dropdown").toggleClass("open");
				});
					
			});
		</script>
	
	</body>
</html>
