<?php
class Database extends PDO{
	public function __construct() {
		//Directory to music database
		parent::__construct ( "sqlite:../ingredients.db" );
	}

	//returns an array of ingredient values
function getIngredient($name){

	$ingredient = array();

	$ingredient[0] = $name;

	$sql = "SELECT description FROM ingredients WHERE name LIKE '%$name%'";

	$description = $this->query($sql);

	$ingredient[1] = $description->fetchColumn();

	$sql = "SELECT image FROM ingredients WHERE name LIKE '%$name%'";

	$image = $this->query($sql);

	$ingredient[2] = $image->fetchColumn();

	return $ingredient;

	}
}
?>