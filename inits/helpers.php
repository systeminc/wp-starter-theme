<?php
    /**
     * PHP Helper Functions
     */

     function dd($var) {
        echo '<pre>' . var_dump($var) . '</pre>';
        die();
     }
