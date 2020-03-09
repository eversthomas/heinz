<!-- header -->
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $this->title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

				<?php
					foreach ($this->stylesheets as $stylesheet) {
						echo '<link href="' . $stylesheet . '" rel="stylesheet" type="text/css" />' . "\n";
					}
				?>

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="site-header">
            <div class="site-title">
                <h1 class="siteheader"><?php echo $this->title; ?></h1>
                <p class="h4">Site description</p>
                <a href="#" class="ghost">CTO</a>
            </div>
						<nav>
							<ul id="nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
        </header>

				<main>
					<?php echo $this->body; ?>
				</main>

				<footer>
					<div id="cpyright">© Copyright 2008 XYZ Company. All rights reserved.</div>
				</footer>

				<!-- scripts -->
				<?php
				foreach ($this->javascripts as $javascript) {
					echo '<script src="' . $javascript . '" language="javascript" type="text/javascript" defer="defer"></script>' . "\n";
				}
				?>

		</body>
	</html>
