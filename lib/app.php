<?php

class App {

	static private $_instance;

	private function __construct() {

		session_start();

	}

	static public function getSession() {

		if(!(isset(self::$_instance))) {

			self::$_instance = new App();

		}

		return self::$_instance;

	}

}