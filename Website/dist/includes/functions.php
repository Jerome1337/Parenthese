<?php
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);
	include('dbconnect.php');
    $action = $_POST['action'];
    switch($_POST['action']) {
        case 'graffeur':
        	addGraffeur();
        	break;
        case 'devis':
        	addDevis();
        	break;
        case 'contactArtist':
        	contactArtist();
        	break;
        case 'contactEntreprise':
        	contactEntreprise();
        	break;
        default:
            die('Acces interdit !');
    }

	// ADD GRAFFEUR TO DB
	function addGraffeur(){
		$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['age'])
			&& !empty($_POST['tel'])
			&& !empty($_POST['email'])
			&& !empty($_POST['website'])
			&& !empty($_POST['competences'])
			&& !empty($_POST['salaire'])
			)
		{

			$name = mysql_real_escape_string($_POST['name']);
			$age = mysql_real_escape_string($_POST['age']);
			$tel = mysql_real_escape_string($_POST['tel']);
			$email = mysql_real_escape_string($_POST['email']);
			$website = mysql_real_escape_string($_POST['website']);
			$competences = mysql_real_escape_string($_POST['competences']);
			$salaire = mysql_real_escape_string($_POST['salaire']);

			$name = addcslashes($name, '%_');
			$age = addcslashes($age, '%_');
			$tel = addcslashes($tel, '%_');
			$email = addcslashes($email, '%_');
			$website = addcslashes($website, '%_');
			$competences = addcslashes($competences, '%_');
			$salaire = addcslashes($salaire, '%_');

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO graffeurs (name, age, tel, email, website, competences, salaire) VALUES (:name, :age, :tel, :email, :website, :competences, :salaire)');
			$req->execute(array(
				'name' => $name,
				'age' => $age,
				'tel' => $tel,
				'email' => $email,
				'website' => $website,
				'competences' => $competences,
				'salaire' => $salaire
			));
			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);
	}

	// 	ADD DEVIS TO + SEND EMAIL
	function addDevis(){
		$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['email'])
			&& !empty($_POST['date'])
			&& !empty($_POST['lieu'])
			&& !empty($_POST['desc']))
		{
			$to = ''.$_POST['email'].'';
			$content = ''.$_POST['message'].'';
			$subject = 'Nouvelle demande de contact - Bicrav\'Art';
			$from = ''.$_POST['email'].'';

			$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
			$api_key = 'CqVeM7kidO1ZIokj7MwgtQ';
			$content_text = strip_tags($content);

			$postString = '{
				"key": "' . $api_key . '",
				"message": {
				"html": "' . $content . '",
				"text": "' . $content_text . '",
				"subject": "' . $subject . '",
				"from_email": "' . $from . '",
				"from_name": "' . $from . '",
				"to": [
				{
					"email": "' . $to . '",
					"name": "' . $to . '"
				}
				],
				"track_opens": true,
				"track_clicks": true,
				"auto_text": true,
				"url_strip_qs": true,
				"preserve_recipients": true
				},
				"async": false
			}';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
			$result = curl_exec($ch);

			$name = mysql_real_escape_string($_POST['name']);
			$email = mysql_real_escape_string($_POST['email']);
			$dateproj = mysql_real_escape_string($_POST['date']);
			$lieu = mysql_real_escape_string($_POST['lieu']);
			$description = mysql_real_escape_string($_POST['desc']);

			$name = addcslashes($name, '%_');
			$email = addcslashes($email, '%_');
			$dateproj = addcslashes($dateproj, '%_');
			$lieu = addcslashes($lieu, '%_');
			$description = addcslashes($description, '%_');

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO entreprises (name, email, dateproj, lieu, description) VALUES (:name, :email, :dateproj, :lieu, :description)');
			$req->execute(array(
				'name' => $name,
				'email' => $email,
				'dateproj' => $dateproj,
				'lieu' => $lieu,
				'description' => $description
			));

			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);
	}

	// CONTACT ARTIST + SEND EMAIL
	function contactArtist(){
		$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['email'])
			&& !empty($_POST['tel'])
			&& !empty($_POST['message'])
			)
		{
			$to = 'contact@bicravart.com';
			$content = ''.$_POST['message'].'';
			$subject = 'Nouvelle demande de contact - Bicrav\'Art';
			$from = ''.$_POST['email'].'';

			$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
			$api_key = 'CqVeM7kidO1ZIokj7MwgtQ';
			$content_text = strip_tags($content);

			$postString = '{
				"key": "' . $api_key . '",
				"message": {
				"html": "' . $content . '",
				"text": "' . $content_text . '",
				"subject": "' . $subject . '",
				"from_email": "' . $from . '",
				"from_name": "' . $from . '",
				"to": [
				{
					"email": "' . $to . '",
					"name": "' . $to . '"
				}
				],
				"track_opens": true,
				"track_clicks": true,
				"auto_text": true,
				"url_strip_qs": true,
				"preserve_recipients": true
				},
				"async": false
			}';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
			$result = curl_exec($ch);

			$name = mysql_real_escape_string($_POST['name']);
			$email = mysql_real_escape_string($_POST['email']);
			$tel = mysql_real_escape_string($_POST['tel']);
			$message = mysql_real_escape_string($_POST['message']);

			$name = addcslashes($name, '%_');
			$email = addcslashes($email, '%_');
			$tel = addcslashes($tel, '%_');
			$message = addcslashes($message, '%_');

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO contactArtist (name, email, tel, message) VALUES (:name, :email, :tel, :message)');
			$req->execute(array(
				'name' => $name,
				'email' => $email,
				'tel' => $tel,
				'message' => $message
			));

			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);
	}

	// CONTACT ENTREPRISE + SEND EMAIL
	function contactEntreprise(){
		$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['email'])
			&& !empty($_POST['tel'])
			&& !empty($_POST['message'])
			)
		{

			$to = 'contact@bicravart.com';
			$content = ''.$_POST['message'].'';
			$subject = 'Nouvelle demande de contact - Bicrav\'Art';
			$from = ''.$_POST['email'].'';

			$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
			$api_key = 'CqVeM7kidO1ZIokj7MwgtQ';
			$content_text = strip_tags($content);

			$postString = '{
				"key": "' . $api_key . '",
				"message": {
				"html": "' . $content . '",
				"text": "' . $content_text . '",
				"subject": "' . $subject . '",
				"from_email": "' . $from . '",
				"from_name": "' . $from . '",
				"to": [
				{
					"email": "' . $to . '",
					"name": "' . $to . '"
				}
				],
				"track_opens": true,
				"track_clicks": true,
				"auto_text": true,
				"url_strip_qs": true,
				"preserve_recipients": true
				},
				"async": false
			}';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
			$result = curl_exec($ch);

			$name = mysql_real_escape_string($_POST['name']);
			$email = mysql_real_escape_string($_POST['email']);
			$tel = mysql_real_escape_string($_POST['tel']);
			$message = mysql_real_escape_string($_POST['message']);

			$name = addcslashes($name, '%_');
			$email = addcslashes($email, '%_');
			$tel = addcslashes($tel, '%_');
			$message = addcslashes($message, '%_');

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO contactEntreprise (name, email, tel, message) VALUES (:name, :email, :tel, :message)');
			$req->execute(array(
				'name' => $name,
				'email' => $email,
				'tel' => $tel,
				'message' => $message
			));

			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);
	}