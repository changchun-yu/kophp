<?php

namespace Ko\exception\http;

use ko\exception\Exception;
use ko\Url;

/**
 * Redirect HTTP exception class. Used for all [HTTP_Exception]'s where the status
 * code indicates a redirect.
 *
 * Eg [HTTP_Exception_301], [HTTP_Exception_302] and most of the other 30x's
 *
 * @package    Kohana
 * @category   Exceptions
 * @author     Kohana Team
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
abstract class Redirect extends Expected {

    /**
     * Specifies the URI to redirect to.
     *
     * @param  string  $location  URI of the proxy
     */
    public function location($uri = NULL)
    {
        if ($uri === NULL)
            return $this->headers('Location');

        if (strpos($uri, '://') === FALSE) {
            // Make the URI into a URL
            $uri = Url::site($uri, TRUE, !empty(Ko\ko::$index_file));
        }

        $this->headers('Location', $uri);

        return $this;
    }

    /**
     * Validate this exception contains everything needed to continue.
     *
     * @throws Kohana_Exception
     * @return bool
     */
    public function check()
    {
        if ($this->headers('location') === NULL)
            throw new Exception('A \'location\' must be specified for a redirect');

        return TRUE;
    }

}
