<?php

	//	Only demo quantity
	$quantity = $_POST['quantity'];

	$i = 0;

	while ($i < $quantity) {
		$i++;
		echo '
		<figure class="effect-folio wow" data-wow-delay=".'.$i.'s">

			<img src="img/folio/'.$i.'.jpg" alt="img_'.$i.'">

			<figcaption>
				<h2>Edward Folio</h2>
				<h4>Fusce convallis</h4>
				<a href="folio.html" class="btn btn-default-outline btn-lg">View project</a>
			</figcaption>

		</figure>
		';
	}

?>
