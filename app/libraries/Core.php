<?php 
/**
 * App Core Class
 * Creates URL & loads core controller 
 * URL Format - /controller/method/params
 */

class Core 
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        // Name of controller is always an uppercase file
        $controller = ucwords($url[0]);
        if (file_exists("../app/controllers/$controller.php")) {
            $this->currentController = $controller;
            unset($url[0]);
        }

        require_once "../app/controllers/{$this->currentController}.php";
        $this->currentController = new $this->currentController;
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}