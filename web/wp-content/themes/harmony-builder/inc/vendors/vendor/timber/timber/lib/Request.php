<?php

namespace Timber;

use builder\inc\vendors\vendor\timber\timber\lib\Core;
use Timber\CoreInterface;

/**
 * TimberRequest exposes $_GET and $_POST to the context
 */

class Request extends builder\inc\vendors\vendor\timber\timber\lib\Core implements CoreInterface {
	public $post = array();
	public $get = array();

	/**
	 * Constructs a TimberRequest object
	 * @example
	 */
	public function __construct() {
		$this->init();
	}
	/**
	 * @internal
	 */
	protected function init() {
		$this->post = $_POST;
		$this->get = $_GET;
	}

	public function __call( $field, $args ) {}

	public function __get( $field ) {}

	/**
	 * @return boolean|null
	 */
	public function __isset( $field ) {}

	public function meta( $key ) {}
}
