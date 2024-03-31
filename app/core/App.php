<?php

class App
{
    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    /**
     * Constructor for initializing the Router object.
     * 
     * This constructor initializes the Router object by parsing the URL,
     * determining the controller and method to be executed based on the URL,
     * and calling the respective method with any provided parameters.
     * 
     * @return void
     */
    public function __construct()
    {
        // Parse the URL to extract controller, method, and parameters
        $url = $this->parseUrl();

        // Check if the controller file exists
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Include the controller file
        require_once '../app/controllers/' . $this->controller . '.php';

        // Create an instance of the controller
        $this->controller = new $this->controller;

        // Check if the method exists in the controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Set the parameters for the method call
        $this->params = $url ? array_values($url) : [];

        // Call the method with the provided parameters
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Parses the 'url' parameter from the $_GET array.
     *
     * This method retrieves the 'url' parameter from the $_GET array,
     * sanitizes it to remove unwanted characters, and then splits it
     * into an array using '/' as the delimiter.
     *
     * @return array|null An array containing the parsed URL segments,
     *                    or null if the 'url' parameter is not set.
     */
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
