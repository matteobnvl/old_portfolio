<?php 
$message_error = "style=\"border-color:red\"";
$valide = False;
if (!empty($_POST)) {
	if ($_POST['lastname'] != "" &&
		$_POST['firstname'] != "" &&
		$_POST['subject'] != "" &&
		$_POST['email'] != "" &&
		filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) &&
		$_POST['message'] != "" ){
			$valide = True;
			$to = "matteobonneval19@gmail.com";
			$subject = $_POST['subject'];
			$message = $_POST['lastname'] . " " . $_POST['firstname'] . "\r\n";
			$message .= "mail :" . $_POST['email'] . "\r\n";
			$message .= wordwrap($_POST['message'],70,"\r\n");
			$headers = 'From: webmaster@monportfolio.com' . "\r\n" .
     					'Reply-To: webmaster@monportfolio.com' . "\r\n" .
     					'X-Mailer: PHP/' . phpversion();
     		if (mail($to,$subject,$message,$headers)) {
     			?>
     			<script type="text/javascript">alert("Votre mail m'a été envoyé avec succés.");</script>
     			<?php
      		}else{
     			?>
     			<script type="text/javascript">alert("Un problème est survenue la mail n'a pas été envoyé...Réessayez.");</script>
     			<?php
     		}
	}
}

?>



<section class="contain-contact">
	<div class="contain-form">
		<h2>Formulaire de contact</h2>
		<p>Vous pouver me contacter via ce formulaire en renseignant votre mail et votre message.</p>
		<form action="" method="POST">
			<div class="contain-name">

				<div class="name">
					<div><label for="lastname">Nom<?php 
							if(!empty($_POST)){
								if($_POST['lastname'] == "" && $valide ==False){
								echo "<span style=\"font-size:0.55em;\">(veuillez remplir ce champs)</span>";
							}
						}
						?></label></div>
					<div><input 
						<?php 
							if(!empty($_POST)){
								if($_POST['lastname'] == "" && $valide ==False){
								echo $message_error;
							}
						}
						?> 
						value="<?php 
							if(!empty($_POST)){
								if($_POST['lastname']!="" && $valide ==False){
									echo $_POST['lastname'];
								}
							} 
						?>" 
						type="text" name="lastname" id="lastname" placeholder="Votre nom" autocomplete="off"></div>
				</div>

				<div class="name">
					<div><label for="firstname">Prénom<?php 
							if(!empty($_POST)){
								if($_POST['firstname'] == "" && $valide ==False){
								echo "<span style=\"font-size:0.55em;\">(veuillez remplir ce champs)</span>";
							}
						}
						?></label></div>
					<div><input 
						<?php 
							if(!empty($_POST)){
								if($_POST['firstname'] == "" && $valide ==False) {
								echo $message_error;
							}
						}
						?>
						value="<?php 
							if(!empty($_POST)){
								if($_POST['firstname']!="" && $valide ==False){
									echo $_POST['firstname'];
								}
							} 
						?>"
						type="text" name="firstname" id="firstname" placeholder="Votre prénom" autocomplete="off"></div>
				</div>



			</div>

			<div class="subject">
				<div><label for="subject">Sujet du message<?php 
							if(!empty($_POST)){
								if($_POST['subject'] == "" && $valide ==False){
								echo "<span style=\"font-size:0.55em;\">(veuillez remplir ce champs)</span>";
							}
						}
						?></label></div>
				<div><input <?php 
							if(!empty($_POST)){
								if($_POST['subject'] == "" && $valide ==False) {
								echo $message_error;
							}
						}
						?>
						value="<?php 
							if(!empty($_POST)){
								if($_POST['subject']!="" && $valide ==False){
									echo $_POST['subject'];
								}
							} 
						?>" type="text" name="subject" id="subject" placeholder="L'objet de votre message" autocomplete="off"></div>
			</div>


			<div class="subject">
				<div><label for="email">Email<?php 
							if(!empty($_POST)){
								if($_POST['email'] == "" && $valide ==False){
								echo "<span style=\"font-size:0.55em;\">(veuillez remplir ce champs)</span>";
							}
							if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
								echo "<span style=\"font-size:0.55em;\">(Adresse mail non valide)</span>";
							}
						}
						?></label></div>
				<div><input <?php 
							if(!empty($_POST)){
								if($_POST['email'] == "" && $valide ==False || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
								echo $message_error;
							}
						}
						?>
						value="<?php 
							if(!empty($_POST)){
								if($_POST['email']!="" && $valide ==False){
									echo $_POST['email'];
								}
							} 
						?>" type="text" name="email" id="email" placeholder="Votre email" autocomplete="off"></div>
			</div>
			<div class="subject">
				<div><label for="message">Message<?php 
							if(!empty($_POST)){
								if($_POST['email'] == "" && $valide ==False){
								echo "<span style=\"font-size:0.55em;\">(veuillez remplir ce champs)</span>";
							}
						}
						?></label></div>
				<textarea <?php 
							if(!empty($_POST)){
								if($_POST['message'] == "" && $valide ==False) {
								echo $message_error;
							}
						}
						?> name="message" id="message" placeholder="Votre message"><?php 
							if(!empty($_POST)){
								if($_POST['message']!="" && $valide ==False){
									echo $_POST['message'];
								}
							} 
						?></textarea>
			</div>
			<button>Envoyer</button>

		</form>
	</div>
</section>