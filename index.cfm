<cfset additionalHeaderData = '<title>High School Programs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="stylesheets/main.css" type="text/css" />
' />

<cfinclude template="/site/template/header.cfm">

<div id="home-page">
	<cfinclude template="/site/template/header.cfm">
	<section id="top-section">
		<div class="lockers"></div><img id="header-image" src="img/Krystal_red.jpg" alt="Krystal" /><div class="lockers"></div>
		<div class="header-container">
			<h1>High School Programs</h1>
			<h2>by BYU Independent Study</h2>
		</div>
	</section>
	<section class="programs-table">
		<h2>Three 4-Year High School Programs</h2>
		<h3>Each with a Customizable Core</h3>
		<div class="program">
			<div class="table-header">
				<h2>Standard Program</h2>
			</div>
			<div class="program-description-container">
				<ul>
					<li>Robust traditional high school curriculum</li>
					<li>24 credits required to complete the program</li>
					<li>Curriculum includes computer technology, social science, and fine arts courses</li>
					<li>Grants an official high school transcript and letter of completion upon finishing the program</li>
				</ul>
				<div class="button-container">
					<button class="side-button"><a href="programs/standard.html">More Info</a>
						<div class="top-left-corner"></div>
						<div class="bottom-right-corner"></div>
					</button>
				</div>
			</div>
		</div><div class="program">
			<div class="table-header">
				<h2>Advanced Program</h2>
			</div>
			<div class="program-description-container">
				<ul>
					<li>An academically rigorous extension of the Standard Program</li>
					<li>Allows for concurrent enrollment for both high school and college credit</li>
					<li>Requires completion of two years of a world languages sequence</li>
					<li>Requires completion of higher-level math and english courses, as well as writing and literature courses</li>
				</ul>
				<div class="button-container">
					<button class="side-button"><a href="programs/advanced.html">More Info</a>
						<div class="top-left-corner"></div>
						<div class="bottom-right-corner"></div>
					</button>
				</div>
			</div>
		</div><div class="program">
			<div class="table-header">
				<h2>Adult Program</h2>
			</div>
			<div class="program-description-container">
				<ul>
					<li>An adult-oriented version of the Standard Program</li>
					<li>Students must be at least 19 years old to apply</li>
					<li>Requires the student to pass a basic skills assessment test (TABE)</li>
					<li>Qualifies student to earn a high school diploma from the Provo (Utah) School District</li>
				</ul>
				<div class="button-container">
					<button class="side-button"><a href="programs/adult.html">More Info</a>
						<div class="top-left-corner"></div>
						<div class="bottom-right-corner"></div>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- <button class="corner-button">Button
		<div class="top-left-corner"></div>
		<div class="bottom-right-corner"></div>
	</button>
	<button class="side-button">Button
		<div class="top-left-corner"></div>
		<div class="bottom-right-corner"></div>
	</button> -->
	
	<script>
	
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-2108793-1', 'byu.edu');
	  ga('send', 'pageview');
		ga('require', 'ecommerce', 'ecommerce.js');   // Load the ecommerce plug-in.
		
	</script>
</div>
</body>
</html>