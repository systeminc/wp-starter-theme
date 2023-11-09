<?php
    /**
     * PHP Helper Functions
     */

     function dd($var) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        die();
     }
