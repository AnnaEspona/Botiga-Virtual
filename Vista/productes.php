	<section id="vistaproductes">
		<?php
		$path = "images/"; ?>
		<div class="poster">
			<h3> <?php echo $productes[0]['Tipus']; echo " "; echo $productes[0]['Preu']; echo "€"?> </h3>
			<?php
			foreach ($productes as $producte){
				if($producte['Tipus']=="Poster"){ ?>
					<div class="fotos">
						<p> <?php echo $producte['Nom'];?> </p>
						<?php $path .= $producte['Image']; ?>
						<a onclick="loadProduct(<?php echo $producte['Id'] ?>)"><img src="<?php echo $path; ?>" height="50" width="50"></a>
						<p> <?php echo $producte['Descripcio']; ?></p>
						<?php $path = "images/"; ?>
					</div>
				<?php }
			}?>
		</div>
		<div class="samarreta">
			<h3> <?php echo $productes[6]['Tipus']; echo " "; echo $productes[6]['Preu']; echo "€"?> </h3>
			<?php
			foreach ($productes as $producte){
				if($producte['Tipus']=="Samarreta"){ ?>
					<div class="fotos">
						<p> <?php echo $producte['Nom'];?> </p>
						<?php $path .= $producte['Image']; ?>
						<a onclick="loadProduct(<?php echo $producte['Id'] ?>)"><img src="<?php echo $path; ?>" height="50" width="50">
						<p> <?php echo $producte['Descripcio']; ?></p>
						<?php $path = "images/"; ?>
					</div>
				<?php }
			}?>
		</div>
		<div class="taca">
			<h3> <?php echo $productes[13]['Tipus']; echo " "; echo $productes[13]['Preu']; echo "€"?> </h3>
			<?php
			foreach ($productes as $producte){
				if($producte['Tipus']=="Taces"){ ?>
					<div class="fotos">
						<p> <?php echo $producte['Nom'];?> </p>
						<?php $path .= $producte['Image']; ?>
						<a onclick="loadProduct(<?php echo $producte['Id'] ?>)"><img src="<?php echo $path; ?>" height="50" width="50">
						<p> <?php echo $producte['Descripcio']; ?></p>
						<?php $path = "images/"; ?>
					</div>
				<?php }
			}?>
		</div>
	</section>
	
