<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', '1234', 'tienda_master');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

