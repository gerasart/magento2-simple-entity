<?php


namespace SampleEntity\SampleEntityPage\Controller\Adminhtml\SampleEntity;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Edit extends Action
{

    public function execute()
    {
//        $rowId = (int) $this->getRequest()->getParam('id');
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
