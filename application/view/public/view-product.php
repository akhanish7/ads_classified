<div id="colorbox">
<div id="cboxContent">
	<a href="<?php echo $back; ?>">&laquo; Back</a>
	<div id="description">
		
		<div style="margin-left: 20px; ">
			<img src="<?php echo ASSETS.$product->image_path(); ?>" width="50%" height="50%"/><br>
			<b>By: <?php echo $user->first_name; ?></b><br />
			<b>Price:</b> Rs. <?php echo $product->price; ?><br />
			<b>Contact:</b> <?php echo $user->phone ?><br />
		<?php if(!empty($product->pur_year)) {	echo "Purchased In: ". $product->pur_year;	} ?>	
		</div>
		<div class="message">
		
					<p><b>Description:</b><?php echo $product->description; ?> </p>
		</div>
	</div>
</div>
</div>
