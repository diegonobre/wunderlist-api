<?php

/**
 * Wunderlist class with default configuration for all classes
 *
 * @author Diego Nobre
 * @link http://github.com/diegonobre/wunderlist-api
 */
class Wunderlist
{
    public $config = null;
    public $url = null;

    public function __construct()
    {
        // get configuration parameters
        // using json_encode to parse array from config to stdClass Object
        // @see http://stackoverflow.com/questions/1869091/how-to-convert-an-array-to-object-in-php
        
        $this->config = json_decode(json_encode(parse_ini_file('config.ini', TRUE)), FALSE);
    }
}
