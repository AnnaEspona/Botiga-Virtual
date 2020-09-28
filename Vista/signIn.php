		<section>
			<div>
				<h1>Registra't a la pàgina web</h1>
				<form method="post" action="index.php?action=enviar">
					Nom complet: <input type="text" name="nom" required pattern="[A-Za-z ]+" title="Escriu el nom sense números"><br>
					Usuari: <input type="text" name="usuari" required pattern="[a-zA-Z0-9]+" title="Escriu el nom d'usuari sense espais"><br>
					Password:<input type="password" name="password" required pattern="[a-zA-Z0-9]+" title="Escriu un password sense espais"><br>
					Adreça electrònica: <input type="email" name="email" required pattern="[a-z-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"title="Fica un e-mail valid" ><br>
					Telèfon: <input type="tel" name="telefon" required pattern="[0-9]+" maxlength="9" minlength="9" title="Utilitza únicament números"><br>
					Adreca: <input type="text" name="adreca" required pattern="[A-Za-z ]+" maxlength="30" title="Fica l'adreça"><br>
					Població: <input type="text" name="poblacio" required pattern="[A-Za-z ]+" maxlength="30"><br>
					Codi Postal:<input type="num" name="codiPostal" required pattern="[0-9]+" maxlength="5" minlength="5" title="Utilitza únicament números"><br>
					Targeta Bancària:<input type="text" name="targeta" required maxlength="16" minlength="16"><br>

					<input type="submit" value="Registrar-me">
				</form>
			</div>
		</section>
