<?php

class Connection
{
	public static function make($config)
	{
		try {
			return new PDO(
				'mysql:host=' . $config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
