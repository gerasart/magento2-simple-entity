<?php

namespace SampleEntity\SampleEntityPage\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class Actions extends Column
{
    const EDIT_URL = 'sampleentitypage/sampleentity/edit';
    const REMOVE_URL = 'sampleentitypage/sampleentity/remove';
    const DUPLICATE_URL = 'sampleentitypage/sampleentity/duplicate';

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $storeId = $this->context->getFilterParam('store_id');
            foreach ($dataSource['data']['items'] as & $item) {
                // here we can also use the data from $item to configure some parameters of an action URL
                $item[$this->getData('name')] = [
                    'edit' => [
                        'href' => $this->urlBuilder->getUrl(
                            static::EDIT_URL,
                            ['id' => $item['id']]
                        ),
                        'label' => __('Edit')
                    ],
                    'remove' => [
                        'href' => $this->urlBuilder->getUrl(
                            static::REMOVE_URL,
                            ['id' => $item['id']]
                        ),
                        'label' => __('Remove')
                    ],
                    'duplicate' => [
                        'href' => $this->urlBuilder->getUrl(
                            static::DUPLICATE_URL,
                            ['id' => $item['id']]
                        ),
                        'label' => __('Duplicate')
                    ],
                ];
            }
        }
        return $dataSource;
    }
}
