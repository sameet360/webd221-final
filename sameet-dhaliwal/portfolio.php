	<?php include "header.php"; ?>

		<header id="big-portfolio-image">
			<h1>Our<span>Works</span></h1>
			<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.
			</p>
		</header>

		<section class="portfolio">
			<div class="container">
				<div class="our-portfolio-text">
					<h3><span>Our Portfolio</span></h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.  Lorem ipsum dolor   sit amet, consectetur adipisicing elit, sed do eiusmod tempor  ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
				</div>

				<nav class"second-nav">
					<div class="container">
						<ul class="portfolio-nav">
							<li>All</li>
							<li>HTML</li>
							<li>Jquery</li>
							<li>UI Design</li>
							<li>Wordpress</li>
						</ul>
					</div>
				</nav>

				<div class="portfolio-projects">
					<div class="column2">
						<img src="images/stunning-miami.jpg"/>
						<div class="imageText"><p>Project Name</p></div>
					</div>
							
					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/beautiful-venice-canal.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/firenze.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/greece-coast-view.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/ibiza-island.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/kyoto-japan.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/copacabana-rio-de-janeiro.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/wolf-with-rose.jpg"/>
					</div>

					<div class="column2">
						<p class="imageText">Project Name</p>
						<img src="images/Marlon-Brando-The-Godfather.jpeg"/>
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