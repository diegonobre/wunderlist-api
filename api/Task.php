<?php 

require_once 'Wunderlist.php';

/**
 * Based on documentation from https://developer.wunderlist.com/documentation/endpoints/task
 *
 * @author Diego Nobre
 * @link http://github.com/diegonobre/wunderlist-api
 */
class Task extends Wunderlist
{
    /**
     * Get tasks from a list
     *
     * @param $list_id int
     * @param $completed boolean
     */
    public function getTasks($list_id, $completed = 'true')
    {
        $data = array(
                    'completed' => $completed,
                    'list_id' => $list_id
                );

        $curl = curl_init();

        // set URL parameters
        $url = sprintf("%s?%s", $this->config->url->tasks, http_build_query($data));

        // setting HTTP Headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->config->auth->CURLOPT_HTTPHEADER);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

}
