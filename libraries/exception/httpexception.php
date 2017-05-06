<?php
namespace ko\exception;
use ko\Request;

 class HttpException extends Exception {

    /**
     * Creates an HTTP_Exception of the specified type.
     *
     * @param   integer $code       the http status code
     * @param   string  $message    status message, custom content to display with error
     * @param   array   $variables  translation variables
     * @return  HTTP_Exception
     */
    public static function factory($code, $message = NULL, array $variables = NULL, Exception $previous = NULL)
    {
//       $class = '\\ko\\exception\\http\\Head' . $code;
//       $class = "\\ko\\exception\\http\\Head" . $code;
//       echo $class;
//       new \ko\exception\http\Head404($message, $variables, $previous);
//       exit;
//        return new $class($message, $variables, $previous);
        return new HttpException($code,$message, $variables, $previous);
    }

    /**
     * @var  int        http status code
     */
    protected $_code = 0;

    /**
     * @var  Request    Request instance that triggered this exception.
     */
    protected $_request;

    /**
     * Creates a new translated exception.
     *
     *     throw new Ko_Exception('Something went terrible wrong, :user',
     *         array(':user' => $user));
     *
     * @param   string  $message    status message, custom content to display with error
     * @param   array   $variables  translation variables
     * @return  void
     */
    public function __construct($code ,$message = NULL, array $variables = NULL, Exception $previous = NULL)
    {

        parent::__construct($message, $variables, $code, $previous);
    }

    /**
     * Store the Request that triggered this exception.
     *
     * @param   Request   $request  Request object that triggered this exception.
     * @return  HTTP_Exception
     */
    public function request(Request $request = NULL)
    {
        if ($request === NULL)
            return $this->_request;

        $this->_request = $request;

        return $this;
    }

    /**
     * Generate a Response for the current Exception
     *
     * @uses   Ko_Exception::response()
     * @return Response
     */
    public function get_response()
    {
        return Exception::response($this);
    }

}
