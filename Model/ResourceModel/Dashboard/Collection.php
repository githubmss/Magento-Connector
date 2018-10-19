<?php
namespace Mssbuilder\Connector\Model\ResourceModel\Dashboard;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    private $idFieldName = 'id';
    
    public function _construct()
    {
        $this->_init(

            'Mssbuilder\Connector\Model\Dashboard',
            'Mssbuilder\Connector\Model\ResourceModel\Dashboard'
        );
    }
}
