<?php

namespace ko\request\client;

use ko\request\Client;
use ko\exception\Exception;
use ko\exception\HttpException;
use ko\Request;
use ko\Response;
use ko\Ko;
use ko\Profiler;

/**
 * Request Client for internal execution
 *
 * @package    Ko
 * @category   Base
 * @author     Ko Team
 * @copyright  (c) 2008-2012 Ko Team
 * @license    http://kohanaframework.org/license
 * @since      3.1.0
 */
class Internal extends Client {

    /**
     * @var    array
     */
    protected $_previous_environment;

    /**
     * Processes the request, executing the controller action that handles this
     * request, determined by the [Route].
     *
     *     $request->execute();
     *
     * @param   Request $request
     * @return  Response
     * @throws  Ko_Exception
     * @uses    [Ko::$profiling]
     * @uses    [Profiler]
     */
    public function execute_request(Request $request, Response $response)
    {
        // Create the class prefix
        $prefix = '\\app\\controller\\front\\';

        // Directory
        $directory = $request->directory();

        // Controller
        $controller = $request->controller();

        if ($directory) {
            // Add the directory name to the class prefix
            $prefix .= str_replace(array('/'), '\\', trim($directory, '/'));
        }

        if (Ko::$profiling) {
            // Set the benchmark name
            $benchmark = '"' . $request->uri() . '"';

            if ($request !== Request::$initial AND Request::$current) {
                // Add the parent request uri
                $benchmark .= ' « "' . Request::$current->uri() . '"';
            }

            // Start benchmarking
            $benchmark = Profiler::start('Requests', $benchmark);
        }

        // Store the currently active request
        $previous = Request::$current;

        // Change the current request to this request
        Request::$current = $request;

        // Is this the initial request
        $initial_request = ($request === Request::$initial);

        try {
            if (!class_exists($prefix . $controller)) {

                throw HTTPException::factory(404, 'The requested URL :uri was not found on this server.', array(':uri' => $request->uri())
                )->request($request);
            }

            // Load the controller using reflection
//            echo $prefix . $controller;
//            $class = new \app\controller\front\Index();
//            echo "hello";
//            exit;
//            $class = new $prefix . $controller;
            $class = new \ReflectionClass($prefix . $controller);

            if ($class->isAbstract()) {
                throw new Exception(
                'Cannot create instances of abstract :controller', array(':controller' => $prefix . $controller)
                );
            }

            // Create a new instance of the controller
            $controller = $class->newInstance($request, $response);

            // Run the controller's execute() method
            $response = $class->getMethod('execute')->invoke($controller);

            if (!$response instanceof Response) {
                // Controller failed to return a Response.
                throw new Exception('Controller failed to return a Response');
            }
        } catch (HttpException $e) {
            // Store the request context in the Exception
            if ($e->request() === NULL) {
                $e->request($request);
            }

            // Get the response via the Exception
            $response = $e->get_response();
        } catch (Exception $e) {
            // Generate an appropriate Response object
            $response = Exception::_handler($e);
        }

        // Restore the previous request
        Request::$current = $previous;

        if (isset($benchmark)) {
            // Stop the benchmark
            Profiler::stop($benchmark);
        }

        // Return the response
        return $response;
    }

}
