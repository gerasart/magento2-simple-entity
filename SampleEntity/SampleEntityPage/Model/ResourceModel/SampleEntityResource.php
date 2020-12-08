<?php


namespace SampleEntity\SampleEntityPage\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SampleEntityResource extends AbstractDb
{
    const MAIN_TABLE = 'sample_entity';

//    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, $connectionName = null)
//    {
//        parent::__construct($context, $connectionName);
//    }

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, 'id');
    }


}
