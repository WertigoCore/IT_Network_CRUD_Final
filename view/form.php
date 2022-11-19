<?php include('partials/_head.php'); 
mb_internal_encoding("UTF-8");
?>
<h1>Přidání záznamu</h1>
<form action='/?request=save' method="post">
	<label>Jméno</label>
	<input name="first_name" class="form-control" required>
	<br>
	<label>Příjmení</label>
	<input name="second_name" class="form-control" required>
	<br>
	<label>Město</label>
	<input name="city" class="form-control" required>
	<br>
	<button class='btn btn-success' id="btn-save">Uložit</button>
</form>
</div>
</div>
<?php include('partials/_footer.php'); ?>