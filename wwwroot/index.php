
<!DOCTYPE html>
<html>
	<head>
		<title>Basic marketing site</title>
		<link rel="stylesheet" href="css/uikit.min.css" />
		<!-- Almost Flat style -->
		<link rel="stylesheet" href="css/uikit.almost-flat.min.css" />
		<!-- Gradient style -->
		<!-- <link rel="stylesheet" href="css/uikit.gradient.min.css" /> -->

		<!-- Some fixes to things that are irregular to UIkit -->
        <link rel="stylesheet" href="css/simple.css" />

		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/uikit.min.js"></script> 
	</head>
	<body>
		<!--<nav class="uk-navbar uk-navbar-attached">
			<div class="uk-container uk-container-center">
				<a href="#" class="uk-navbar-brand">Project name</a>
				<ul class="uk-navbar-nav uk-hidden-small ">
					<li class="uk-active"><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
					<li class="uk-parent" data-uk-dropdown="{mode:'click'}">
						<a href="">Dropdown <i class="uk-icon-caret-down"></i></a>
							<div class="uk-dropdown uk-dropdown-navbar">
								<ul class="uk-nav uk-nav-navbar">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="uk-nav-divider"></li>
									<li class="uk-nav-header">Nav Header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</div>
					</li>
				</ul>

				<div class="uk-navbar-flip">
					<form class="uk-form uk-hidden-small">
						<fieldset>
							<input type="text" placeholder="Email">
							<input type="password" placeholder="Password">
							<button class="uk-button" type="submit">Sign in</button>
						</fieldset>
					</form>

					<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{target:'#my-id'}"></a>
				</div>

			</div>
		</nav>

		<div id="my-id" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="">
					<li class="uk-active"><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
					<li class="uk-parent" >
						<a href="#">Dropdown</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="uk-nav-divider"></li>
							<li class="uk-nav-header">Nav Header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>

				 Some padding between the ul and the form
				<br>

				Create a container to house the form
				<div class="uk-container uk-container-center">
					<form class="uk-form uk-align-center">
							<div class="uk-form-row">
								<input type="text" placeholder="Email" class="uk-width-1-1">
							</div>
							<div class="uk-form-row">
								<input type="password" placeholder="Password" class="uk-width-1-1">
							</div>
							<div class="uk-form-row">
								<button class="uk-button uk-width-1-1 uk-button-primary" type="submit">Sign in</button>
							</div>
					</form>
				</div>
			</div>
		</div>
-->
		<!-- Needed for padding at top of body, to look more like Bootstrap's example -->
		<br><br>

		<div class="uk-container uk-container-center">

			<!-- UIkit has an alternative to "hero unit", either panel or article - showing implementation of both. -->

			<article class="uk-article">
				<h1 class="uk-article-title" style="text-align:center;">Drive with me</h1>
				<p class="uk-article-lead" style="text-align:center;">
                    Welcome to drive with me the fantastic car sharing app!
                    
				</p>
			</article>

			<!-- Panel alternative
			<!--
				<div class="uk-panel">
					<h3 class="uk-panel-title">Hello, world!</h3>
					<p>
						This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
					</p>
					
					<button class="uk-button uk-button-primary" type="submit">Learn more &raquo;</button>
				</div>
			-->

			<br><br>
			<br>

			<div class="uk-grid">
				<div class="uk-width-medium-1-3">
					<div class="uk-panel">
						<h3 class="uk-panel-title">Add a Journey</h3>

                        <?php include "./add_journey.php" ?>
						
						<br><br>
					</div>
				</div>
            
				<div class="uk-width-medium-1-3">
					<div class="uk-panel">
						<h3 class="uk-panel-title">Heading</h3>
                            
                        <?php include "./display_all_journeys.php" ?>
                        
                        
                        <button class="uk-button">View details &raquo;</button>
						
						<br><br>
					</div>
				</div>
				<div class="uk-width-medium-1-3">
					<div class="uk-panel">
						<h3 class="uk-panel-title">Heading</h3>
                        <!--- insert stuff herer -->
						<button class="uk-button">View details &raquo;</button>
						
						<br><br>
					</div>
				</div>
			</div>

			<!-- Some spacing -->
			<br><br>

			<footer class="uk-align-left">
				&copy; basftd 2014
			</footer>
		</div>
	</body>
</html>









<!--<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
    <title>Drive With Me - Maintenance Page</title>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/simple.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/uikit.min.js"></script>
</head>

<body>
    <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-align-center uk-width-1-1">
        <h1>Drive with me</h1>
    
    
        <p>
            <a class="button" href="./add_journey.php">Register a Journey!</a>
        </p>
    
    </div>
    </div>
    
</body>
    
<footer>
    <p>
        please <a href="mailto:basftd@gmail.com">contact us</a> for more details
    </p>
</footer>

</html>-->