<?php


namespace SampleEntity\SampleEntityPage\Ui\DataProvider\Form;


use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;
use SampleEntity\SampleEntityPage\Model\ResourceModel\SampleEntity\Grid;;


class DataProvider extends AbstractDataProvider
{
    /**
     * @var Grid\Collection
     */
    protected $collection;

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;





    public function __construct($name, $primaryFieldName, $requestFieldName, array $meta = [], array $data = [])
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
}
