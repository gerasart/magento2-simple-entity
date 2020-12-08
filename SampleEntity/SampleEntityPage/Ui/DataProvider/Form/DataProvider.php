<?php

namespace SampleEntity\SampleEntityPage\Ui\DataProvider\Form;

use Magento\Ui\DataProvider\AbstractDataProvider;

use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntity\CollectionFactory;

class DataProvider extends AbstractDataProvider
{
    /**
     * @var CollectionFactory
     */
    protected $collection;


    public function __construct(
        CollectionFactory $collectionFactory,
        $name,
        $primaryFieldName,
        $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $meta,
            $data
        );

        $this->collection = $collectionFactory->create();
    }

    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
//        var_dump($this->getCollection()->toArray());
        return $this->getCollection()->toArray();
    }
}
