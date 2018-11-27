<?php 

		$title = "Strong Jugglers";

		include "inc/html-top.php";?>

	<body class = "z-pattern home">



		<header class = "persistent">

			<div class = "container">

			<section class="primary">

			<h1>The Strong Jugglers</h1>

			</section>



			<section class= "strong">

				<form>

				<input type="text" name="email" id="email" placeholder="Join Our Mailing List!">

				<button type="submit">Submit</button>

			</form>

			</section>

			</div>

		</header>



		<main>

			<h2><strong>The University of Rochester's<br>only Juggling Club!</strong></h2>

		</main>

		

		<footer class="persistent">

			<div class = "container">

			<section class="weak">

				<h2>Who are we?</h2>

				<p>We're a collective of juggling, unicycling, poi and diabolo spinning<br>

				college students. We meet on Tuesdays and Thursday, and we're always<br>

				open to teach new people, no coordination or experience needed!</p>

			</section>



			<section class="terminal">

				
    			<button class = "button" name ="Learn More" onClick="redirect()"> 
    			<script type = "text/javascript">
    				function redirect() {
    					var url = "http://csc174.org/midterm/jmedina/about.php";
    					window.location.assign(url);
    				}
    			</script>
				Learn More! </button>			</section>

		</div>

	</footer>



	</body>

</html>

