<?php
namespace UserFrosting;

/*******

/secret/*

*******/

// Handles encrypt-related activities, including encrypt, decrypt, generate-key, and crud
class SecretController extends \UserFrosting\BaseController {

	public function __construct($app){
		$this->_app = $app;

		// Load a page schema.  You may override this in individual pages.
		$this->_page_schema = PageSchema::load("default", $this->_app->config('schema.path') . "/pages/pages.json");
	}

	public function pageEncrypt(){
		$this->_app->render('secret/encrypt.html', [
				'page' => [
				'author' =>         $this->_app->site->author,
				'title' =>          "A secure, modern user management system based on UserCake, jQuery, and Bootstrap.",
				'description' =>    "Main landing page for public access to this website.",
				'schema' =>         $this->_page_schema,
				'alerts' =>         $this->_app->alerts->getAndClearMessages(),
				'active_page' =>    ""
				]
				]);
	}
}