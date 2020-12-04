<?php

namespace SampleEntity\SampleEntityPage\Model;

use Magento\Framework\Model\AbstractModel;
use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntityResource;

class SampleEntity extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(SampleEntityResource::class);
    }
}
