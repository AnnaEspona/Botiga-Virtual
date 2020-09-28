	<section id="menuS">
		<?php foreach ($series as $serie){ ?>
		<div>
			<p style="cursor: pointer" class="menu" id="<?php echo $serie['Id'] ?>" onclick="loadProductes(<?php echo $serie['Id'] ?>)"> <?php echo $serie['Nom']; ?> </p>
		</div>
		<?php } ?>
	</section>

