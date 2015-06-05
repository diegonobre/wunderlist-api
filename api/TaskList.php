<?php 

require_once 'Wunderlist.php';

/**
 * Based on documentation from https://developer.wunderlist.com/documentation/endpoints/list
 *
 * @author Diego Nobre
 * @link http://github.com/diegonobre/wunderlist-api
 */
class TaskList extends Wunderlist
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all lists from Wunderlist user
     */
    public function getAll()
    {
        $curl = curl_init();

        // setting HTTP Headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->config->auth->CURLOPT_HTTPHEADER);

        curl_setopt($curl, CURLOPT_URL, $this->config->url->lists);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

}
