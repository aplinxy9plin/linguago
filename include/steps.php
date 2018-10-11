<section class="section section-steps">
	<div class="container">
		<div class="section__title">
			<h2 class="title title-h2 center">Как бронировать курс на MyLingua</h2>
		</div>

		<div class="features row">
			<div class="features__item col-md-12">
				<div class="features__pic features__pic-big"><img src="images/plan.png" /></div>
			</div>
		</div>
		<?php
		if(empty($_SESSION['login'])){
		echo '<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="featured-btn-wrap">
					<a href="login/reg.php" class="btn btn-danger">НАЧАТЬ СЕЙЧАС</a>
				</div>
			</div>
		</div>';
		}
		?>
	</div>
</section>