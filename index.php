<?php
mb_internal_encoding("UTF-8");

$contact = new Contact;

if (isset($_GET['request'])) {
	$request = $_GET['request'];
} else {
	$request = 'home';
}

switch ($request) {
	case 'create':
		include('view/form.php');
		break;

	case 'save':
		$contact->setFirstName(htmlspecialchars(trim($_POST['first_name'])));
		$contact->setSecondName(htmlspecialchars(trim($_POST['second_name'])));
		$contact->setCity(htmlspecialchars(trim ($_POST['city'])));
		if ($contact->isValid()) {
			$contact->save();
			header('Location:/?mensage=Kontakt uložen!');
		} else {
			echo "Chyba!";
		}
		break;

	case 'edit':
		$contact = $contact->find($_GET['id']);
		include('view/edit.php');
		break;

	case 'update':
		$contact->setFirstName(htmlspecialchars(trim($_POST['first_name'])));
		$contact->setSecondName(htmlspecialchars(trim($_POST['second_name'])));
		$contact->setCity(htmlspecialchars(trim($_POST['city'])));
		if ($contact->isValid()) {
			$contact->update(htmlspecialchars(trim($_POST['id'])));
			header('Location:/?mensage=Kontakt upraven!');
		}
		break;

	case 'destroy':
		$contact = $contact->destroy(htmlspecialchars(trim($_GET['id'])));
		break;


	case 'home':
		$result = $contact->all();
		include('view/list.php');
		break;
}
