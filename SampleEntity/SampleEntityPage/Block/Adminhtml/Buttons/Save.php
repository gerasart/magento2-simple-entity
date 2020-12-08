<?php

namespace SampleEntity\SampleEntityPage\Block\Adminhtml\Buttons;

use Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Save extends GenericButton implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => 'Save',
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'save'],
                ],
                'form-role' => 'save',
            ],
            'sort_order' => 80,
        ];
    }

    public function getSaveUrl()
    {
        return $this->getUrl('*/*/save', []);
    }
}
