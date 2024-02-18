<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
$prodjson = file_get_contents("./produkty.json") or die("Failed to load");
$products = json_decode($prodjson, true)["products"];
shuffle($products);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Alsa</title>
	<script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="css/output.css">
	<link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
	<script>
$(() => {
	$(".carousel-right").click((ev) => {
		let par = $(ev.target).parents(".carousel:first").children(".carousel-items")[0];
		par.scrollBy(300, 0);
	});

	$(".carousel-left").click((ev) => {
		let par = $(ev.target).parents(".carousel:first").children(".carousel-items")[0];
		par.scrollBy(-300, 0);
	});
});
	</script>
</head>

<body>
	<header>
		<h1>Alsa</h1>
		<div class="nav-buttons">
			<a href="#">O nás</a>
			<a href="#"><span class="bx bxs-user"></span></a>
			<a href="#"><span class="bx bxs-cart"></span></a>
		</div>
	</header>
	<div id="main-content">
		<aside>
			<div>Kategorie:</div>
			<ul>
				<li><a href="#">Mobily</a></li>
				<li><a href="#">Počítače</a></li>
				<li><a href="#">Herní konzole</a></li>
				<li><a href="#">Síťové prvky</a></li>
				<li><a href="#">Kabely</a></li>
				<li><a href="#">Televizory</a></li>
				<li><a href="#">Auto-moto</a></li>
				<li><a href="#">Drogerie</a></li>
				<li><a href="#">Zdraví</a></li>
				<li><a href="#">Oblečení</a></li>

		</aside>
		<article>
			<section id="foryou">
				<h2>Doporučeno pro Vás</h2>
				<div class="carousel">
					<button type="button" class="carousel-left"><span class="bx bxs-left-arrow"></span></button>
					<button type="button" class="carousel-right"><span class="bx bxs-right-arrow"></span></button>
					<div class="carousel-items">
					<?php foreach($products as $i => $p){
							?>
						<div class="carousel-item">
							<div class=image-div>
								<img src="<?php echo $p["image"]; ?>" />
							</div>
							<div class="item-desc"><?php echo $p["name"];?></div>
							<div class="item-price"><?php echo $p["price"];?> Kč</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</section>
<section id="foryou">
				<h2>Novinky</h2>
				<div class="carousel">
					<button type="button" class="carousel-left"><span class="bx bxs-left-arrow"></span></button>
					<button type="button" class="carousel-right"><span class="bx bxs-right-arrow"></span></button>
					<div class="carousel-items">
<?php
					shuffle($products);	
					foreach($products as $i => $p){
							?>
						<div class="carousel-item">
							<div class=image-div>
								<img src="<?php echo $p["image"]; ?>" />
							</div>
							<div class="item-desc"><?php echo $p["name"];?></div>
							<div class="item-price"><?php echo $p["price"];?> Kč</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</section>
		</article>
	</div>
	<footer>&copy; Alsa s.r.o.</footer>
</body>

</html>
