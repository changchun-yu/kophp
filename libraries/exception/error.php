<?php

namespace ko\exception;

use ko\exception\Exception;

class Error {

    /**
     * 注册异常处理
     * @return void
     */
    public static function register()
    {
//        error_reporting(E_ALL);
        set_error_handler([__CLASS__, 'handlerError']);
        set_exception_handler([__CLASS__, 'handlerException']);
        register_shutdown_function([__CLASS__, 'handlerShutdown']);
    }

    /**
     * Exception Handler
     * @param  \Exception|\Throwable $e
     */
    public static function handlerException($e)
    {
        if (!$e instanceof \Exception) {
            $e = new \ErrorException($e->getMessage(), $e->getCode(),0, $e->getFile(), $e->getLine());
        }
        Exception::handler($e);
    }

    /**
     * PHP error handler, converts all errors into ErrorExceptions. This handler
     * respects error_reporting settings.
     *
     * @throws  ErrorException
     * @return  TRUE
     */
    public static function handlerError($severity, $message, $file = NULL, $line = NULL)
    {
        $exception = new ErrorException($severity, $message, $file, $line);
        if (error_reporting() & $severity) {
            // This error is not suppressed by current error reporting settings
            // Convert the error into an ErrorException
            throw $exception;
        } else {
            Exception::handler($exception);
        }
    }

    /**
     * Catches errors that are not caught by the error handler, such as E_PARSE.
     *
     * @uses    Ko_Exception::handler
     * @return  void
     */
    public static function handlerShutdown()
    {
//        if (Ko::$errors && $error = error_get_last() && self::isShutdownError($error['type'])) {
        if (!is_null($error = error_get_last()) && self::isShutdownError($error['type'])) {

            // Fake an exception for nice debugging
            Exception::handler(new ErrorException($error['type'], $error['message'], 0, $error['file'], $error['line']));
        }
    }

    /**
     * 确定错误类型是否致命
     *
     * @param  int $type
     * @return bool
     */
    protected static function isShutdownError($type)
    {
        return in_array($type, [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE]);
    }

}
