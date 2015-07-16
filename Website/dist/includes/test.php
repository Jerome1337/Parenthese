<?php
	$data = array();
		if (!empty($_POST['name'])
			&& !empty($_POST['age'])
			&& !empty($_POST['tel'])
			&& !empty($_POST['email'])
			&& !empty($_POST['website'])
			&& !empty($_POST['competences'])
			&& !empty($_POST['salaire']))
		{
			// var_dump($_POST['name']);
			// var_dump($_POST['age']);
			// var_dump($_POST['tel']);
			// var_dump($_POST['email']);
			// var_dump($_POST['website']);
			// var_dump($_POST['competences']);
			// var_dump($_POST['salaire']);

			$req = $bdd->prepare('INSERT INTO graffeurs (name, age, tel, email, website, competences, salaire)VALUES(:name, :age, :tel, :email, :website, :competences, :salaire)');
			$req->execute(array(
				'name' => $_POST['name'],
				'age' => $_POST['age'],
				'tel' => $_POST['tel'],
				'email' => $_POST['email'],
				'website' => $_POST['website'],
				'competences' => $_POST['competences'],
				'salaire' => $_POST['salaire']
			));

			$data['success'] = true;
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);