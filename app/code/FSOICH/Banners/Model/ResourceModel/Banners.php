<?php

namespace FSOICH\Banners\Model\ResourceModel;

class Banners extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
        
        
           
    protected function _construct()
    {
        $this->_init('fsoich_banners', 'banners_id');
    }
}
