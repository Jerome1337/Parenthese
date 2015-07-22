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
			&& !empty($_POST['tel'])
			&& !empty($_POST['email'])
			)
		{

			$name = html_escape($_POST['name']);
			$age = html_escape($_POST['age']);
			$tel = html_escape($_POST['tel']);
			$email = html_escape($_POST['email']);
			$website = html_escape($_POST['website']);
			$competences = html_escape($_POST['competences']);
			$salaire = html_escape($_POST['salaire']);

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

			$name = html_escape($_POST['name']);
			$email = html_escape($_POST['email']);
			$dateproj = html_escape($_POST['date']);
			$lieu = html_escape($_POST['lieu']);
			$description = html_escape($_POST['desc']);

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

			$name = html_escape($_POST['name']);
			$email = html_escape($_POST['email']);
			$tel = html_escape($_POST['tel']);
			$message = html_escape($_POST['message']);

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO contactartist (name, email, tel, message) VALUES (:name, :email, :tel, :message)');
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

			$name = html_escape($_POST['name']);
			$email = html_escape($_POST['email']);
			$tel = html_escape($_POST['tel']);
			$message = html_escape($_POST['message']);

			$bdd = connect();

			$req = $bdd->prepare('INSERT INTO contactentreprise (name, email, tel, message) VALUES (:name, :email, :tel, :message)');
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

	function html_escape($html_escape) {
	        $html_escape =  htmlspecialchars($html_escape, ENT_QUOTES | ENT_HTML5, 'UTF-8');
	        return $html_escape;
	    }