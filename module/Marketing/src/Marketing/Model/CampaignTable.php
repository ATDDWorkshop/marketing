<?php
/**
 * Created by PhpStorm.
 * User: gregor
 * Date: 18.04.15
 * Time: 09:38
 */

namespace Marketing\Model;

use Zend\Http\Request;
use Zend\Http\Client;

class CampaignTable {

    protected $campaigns;

    public function fetchAll(){

        if (!$this->campaigns) {
            $campaigns = array();
            $request = new Request();
            $request->getHeaders()->addHeaders(array(
                'Content-Type' => 'application/json',
                'Accept' => '*/*'
            ));
            $request->setUri("http://datawarehouse/marketing");
            $request->setMethod('GET');
            $client = new Client();
            $response = $client->dispatch($request);
            $data = json_decode($response->getBody(), true);

            foreach ($data["campaigns"] as $campaign) {
                $campaignObj = new Campaign();
                $campaignObj->exchangeArray($campaign);
                array_push($campaigns, $campaignObj);
            }
            $this->campaigns=$campaigns;
        }
        return $this->campaigns;
    }


}