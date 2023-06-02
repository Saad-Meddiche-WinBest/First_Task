<?php

class HomeController
{

    static public function index($page)
    {
        $array_paths = array(
            'views/',
            'views/includes/'
        );

        /* Boocle the class name with each paths , and if it exist then enclud it */
        foreach ($array_paths as $path) {

            $file = sprintf($path . '%s.php', $page);

            //if the file exist then include it 
            if (is_file($file)) {
                include_once $file;
            }
        }
    }
}
