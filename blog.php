<?php 
$title = "Blog";
include('inc/header.php');
?>

<div class="grid">

	<div class="forums fwidth">
		<?php
			include('inc/mainmenu.php');
			?>
	</div>

	<div class="grid-container">
		<div class="blog col-2-3">
			<article class="module post">
				<a href="#"><h2>DPZones Alpha release date</h2></a>
				<p>This is the <a href="#">paragraph</a> text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<img src="img/billboard.png"/>
			</article>
			<article class="module post">
				<a href="#"><h2>We have a new test server!</h2></a>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</article>
		</div>
	</div>
</div>
<?php 
include('inc/footer.php');
?>