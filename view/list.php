<?php
mb_internal_encoding("UTF-8");
include('view/partials/_head.php');
echo "<div class='row'>";
echo "<div class='col-lg-12'>";
echo "<h1>Seznam kontaktů</h1>";

if ($result->num_rows > 0) {
	echo '<div class="container-fluid text-center"> ';

	echo '<table  class="table table-condensed table-striped table-hover table-bordered">';
	echo '<thead>';
              echo '<tr class="bg-danger">';
                echo '<th class="table-secondary">Jméno</th>';
                echo '<th class="table-secondary">Příjmení</th>';
                echo '<th class="table-secondary">Email</th>';
                echo '<th class="table-secondary">Akce</th>';
              echo '</tr>';
           echo ' </thead>';
		   echo '<tbody>';
	while ($row = $result->fetch_assoc()) {
		echo "<tr id='line-" . $row["id"] . "'>";
		echo "<td>" . $row["first_name"] . "</td>";
		echo "<td>" . $row["second_name"] . "</td>";
		echo "<td>" . $row["city"] . "</td>";
		echo "<td> <a href='/?request=edit&id=" . $row["id"] . "'><button class='btn btn-success btn-edit' contact-id='" . $row["id"] . "'>Editovat</button></a> | ";
		echo "<button class='btn btn-danger btn-destroy' contact-id='" . $row["id"] . "'>Odstranit</button></td>";
	}
	echo "</th>";
	echo '</tbody>';
	echo '</table>';
	echo '</div> ';
} else {
	echo "Databáze neobsahuje žádné záznamy";
}

echo "<a href='/?request=create'><button class='btn btn-default'>Nový kontakt</button></a>";

include('view/partials/_footer.php');
