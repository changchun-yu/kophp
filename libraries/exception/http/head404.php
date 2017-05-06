<?php 

namespace Ko\exception\http;
use ko\exception\HttpException;
class Head404 extends HttpException {

	/**
	 * @var   integer    HTTP 404 Not Found
	 */
	protected $_code = 404;
}
