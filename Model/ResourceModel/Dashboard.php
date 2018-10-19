<?php
namespace Mssbuilder\Connector\Model\ResourceModel;

class Dashboard extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    private $idFieldName = 'id';

    public function _construct()
    {
        $this->_init('mssbuilder_dashboard', 'id');
    }
}
