


<?php

$title= "Галерея";
include ("tmp/header.php");

?>


<!-- begin index content -->



<div class="container-fluid">

	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">Gallery</h1>
		</div>
		

<div class="row">
	<div class="container px-5">
		<div class="col-md-12">
			<div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-5">
	
		
		<?php
			$result = mysqli_query($connection, "select * from images order by id desc");
			foreach ($result as $img) {
			
			echo "
			<div class=\"col-md-3\">
			<div class=\"pb-3 bg-light\">
			<a href=\"uploaded/".$img['name']."\" data-lightbox=\"roadtrip\">
			<img class=\"img-fluid img-thumbnail\" src=\"uploaded/".$img['name']."\">
			</a>
			</div>
			</div>";
			}
		?>
	</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="dist/js/lightbox-plus-jquery.js"></script>





<!-- end index content -->



<?php

include ("tmp/footer.php")

?>