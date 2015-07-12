<?php
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);

	if(isset($_POST['action'])) {
	    $action = $_POST['action'];
	    switch($action) {
	        case 'contact' : sendEmail();
	    }
	}

	// SEND EMAIL
	function sendEmail(){
		$data = $_POST['contactData'];
		$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['email'])
			&& !empty($_POST['tel'])
			&& !empty($_POST['subject'])
			&& !empty($_POST['message']))
		{
			// var_dump($_POST['name']);
			// var_dump($_POST['email']);
			// var_dump($_POST['tel']);
			// var_dump($_POST['subject']);
			// var_dump($_POST['message']);

			$to = 'p-jerome@hotmail.fr';
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

			$data['success'] = true;
			
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);
	}