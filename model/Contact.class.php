<?php
mb_internal_encoding("UTF-8");

class Contact extends Db
{

	private $first_name = '';
	private $second_name = '';
	private $city = '';
	private $conn;
	private $table = 'contacts';

	/**
	 * Základní kontruktor - inicializace připojení k databázi
	 *
	 * 
	 */
	public function __construct()
	{
		$db = new Db;
		$this->conn = $db->getConn();
    }

	/**
	 * Výběr všech dat z tabulky
	 *
	 * @return bool
	 * 
	 */
	public function all()
	{
		$sql = "SELECT * FROM " . $this->table;
		return $this->conn->query($sql);
	}

	/**
	 * Uložení záznamu do databáze
	 *
	 * @return bool
	 * 
	 */
	public function save()
	{
		$sql = "INSERT INTO " . $this->table . " (first_name, second_name, city) VALUES('$this->first_name','$this->second_name', '$this->city')";
		return $this->conn->query($sql);
	}

	/**
	 * Update záznamu v DB
	 *
	 * @param mixed $id
	 * 
	 * @return bool
	 * 
	 */
	public function update($id)
	{
		$sql = "UPDATE " . $this->table . " SET first_name='$this->first_name',second_name='$this->second_name', city='$this->city' WHERE id=" . $id;
		return $this->conn->query($sql);
	}

	/**
	 * Ověřuje platnost 
	 *
	 * @return bool
	 * 
	 */
	public function isValid()
	{
		return true;
	}

	/**
	 * Vyhledání v databázi podle zadaného id
	 *
	 * @param mixed $id
	 * 
	 * @return array
	 * 
	 */
	public function find($id)
	{
		$sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;
		return $this->conn->query($sql)->fetch_assoc();
	}

	/**
	 * Vymazání záznamu z databáze
	 *
	 * @param mixed $id
	 * 
	 * @return bool
	 * 
	 */
	public function destroy($id)
	{
		$sql = "DELETE FROM " . $this->table . " WHERE id=" . $id;
		return $this->conn->query($sql);
	}



	/**
	 * Setter pro proměnné
	 *
	 * @param mixed $first_name
	 
	 * 
	 */
	public function setFirstName($first_name)
	{
		$this->first_name = $first_name;
	}

	/**
	 * Setter pro proměnné
	 *
	 * @param mixed $second_name
	 * 
	 */
	public function setSecondName($second_name)
	{
		$this->second_name = $second_name;
	}

	/**
	 * Setter pro proměnné
	 *
	 * @param mixed $city
	 * 
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

}
