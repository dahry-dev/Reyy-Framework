<?php

class Project extends Controller
{
    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function index()
    {
        // load views
        require APP . 'view/template/header.php';
        require APP . 'view/project/index.php';
        require APP . 'view/template/footer.php';
    }
}

?>