<?php
/**
 * App Core Class
 * Creates URL and loads core controller
 * URL format - /controller/method/params
 */
class Core {
    protected $currentController = 'Pages';
    protected $currentModel      = 'index';
    protected $params = [];

    public function __construct()
    {
        // echo "<pre>";
        // print_r($this->getUrl());

        $url = $this->getUrl();

        // Look in controllers for first value
        if (file_exists('../../app/controllers/' . ucwords($url[0]) . '.php')) {
            
        }
    }

    public function getUrl() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}