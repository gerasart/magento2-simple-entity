<?php


namespace SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntity;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * Constructor
     * Configures collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \SampleEntity\SampleEntityPage\Model\SampleEntity::class,
            \SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntityResource::class
        );
    }
}
