<?php include('partials/_head.php'); mb_internal_encoding("UTF-8");?>
<h1>Editace kontaktu</h1>
<form action='/?request=update' method="post">
	<input name="id" type="hidden" value="<?= $contact['id'] ?>">
	<label>Jméno</label>
	<input name="first_name" value="<?= $contact['first_name'] ?>" class="form-control">
	<br>
	<label>Příjmení</label>
	<input name="second_name" value="<?= $contact['second_name'] ?>" class="form-control">
	<br>
	<label>Město</label>
	<input name="city" value="<?= $contact['city'] ?>" class="form-control">
	<br>
	<button id="btn-save" class="btn btn-sm btn-success">Uložit</button>
</form>
</div>
</div>
<?php include('partials/_footer.php'); ?>