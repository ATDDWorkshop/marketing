<?php
/**
 * Created by PhpStorm.
 * User: gmeyenberg
 * Date: 13.04.2015
 * Time: 18:15
 */

namespace Marketing\Model;


class Campaign
{
    public $name;
    public $regs;
    public $revenue;


    public function exchangeArray($data)
    {
        $this->name = (!empty($data['campaign'])) ? $data['campaign'] : null;
        $this->regs = (!empty($data['regs'])) ? $data['regs'] : null;
        $this->revenue = (!empty($data['revenue'])) ? $data['revenue'] : null;
    }


}