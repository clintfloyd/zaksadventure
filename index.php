<?php include_once("variables.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Zak's Adventure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="css/css/bootstrap-reboot.min.css" />
		<link rel="stylesheet" href="css/css/bootstrap-grid.min.css" />
		<link rel="stylesheet" href="css/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/css/styles.css" />
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row topMenu">
					<div class="col-12 col-md-4">
						<img src="images/zak-updated-white.svg" class="logo" />
					</div>
					<div class="col-12 col-md-8">
						<div class="headText text-right">
							I'm currently in <?php echo $CURRENTLY_IN; ?> and it's <span><?php echo $temp_in_c; ?></span>&deg;C outside.
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="stats">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo getBday(); ?></span>
							<span><?php echo yearsLabel(); ?> old</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $WEIGHT; ?></span>
							<span>kg</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $HEIGHT; ?></span>
							<span>cm</span>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div>
							<span><?php echo $COUNTRIES_VISITED; ?></span>
							<span>countries</span>
						</div>
					</div>
				</div>
			</div>
			<figure class="blackPolygon"></figure>
		</section>

		<section class="photoSection">
			<div class="container">
				<h1>My Photos</h1>
				<div class="row">
					<?php
					$data = $insta_photos['data'];
					foreach($data as $d){
						$image = $d->images->standard_resolution->url;
						$caption = @$d->caption->text;
					?>
						<div class="col-6 col-md-3 photoContainer" id="<?php echo $d->id; ?>">
							<div>
								<img src="<?php echo $image; ?>" class="img-fluids" />
								<p>
									<?php echo $caption; ?>
								</p>
							</div>
						</div>
					<?
					}
					?>
				</div>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>