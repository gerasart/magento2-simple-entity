<?php


namespace SampleEntity\SampleEntityPage\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SampleEntityResource extends AbstractDb
{
    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, $connectionName = null)
    {
        parent::__construct($context, $connectionName);
    }

    protected function _construct()
    {
        $this->_init('sample_entity', 'id');
    }


}
