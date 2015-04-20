<?php
/**
 * Created by PhpStorm.
 * User: gmeyenberg
 * Date: 13.04.2015
 * Time: 17:43
 */

namespace Marketing\Controller;


use Marketing\Model\CampaignTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class MarketingController extends AbstractActionController
{

    private $campaignTable;


    protected function getCampaignTable()
    {
        if (!$this->campaignTable) {
            $this->campaignTable = new CampaignTable();
        }
        return $this->campaignTable;
    }


    public function indexAction()
    {

        return new ViewModel(array(
            'campaigns' => $this->getCampaignTable()->fetchAll(),
        ));
    }


}