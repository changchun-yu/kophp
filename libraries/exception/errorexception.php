<?php

namespace ko\exception;
/**
 * 错误异常
 * 主要用于封装 set_error_handler 和 register_shutdown_function 得到的错误
 * 其他和PHP系统\ErrorException功能基本一样
 */
class ErrorException extends Exception
{
    /**
     * 用于保存错误级别
     * @var integer
     */
    protected $severity;


    public function __construct($severity, $message, $file, $line)
    {
        $this->severity = $severity;
        $this->message  = $message;
        $this->file     = $file;
        $this->line     = $line;
        $this->code     = 0;
    }

    /**
     * 获取错误级别
     * @return integer 错误级别
     */
    final public function getSeverity()
    {
        return $this->severity;
    }
}
