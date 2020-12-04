<?php


namespace SampleEntity\SampleEntityPage\Block\Adminhtml\Buttons;


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Save implements ButtonProviderInterface
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
            ],
            'sort_order' => 80,
        ];
    }

}
