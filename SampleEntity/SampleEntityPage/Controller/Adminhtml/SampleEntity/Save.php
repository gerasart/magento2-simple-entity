<?php

namespace SampleEntity\SampleEntityPage\Controller\Adminhtml\SampleEntity;

use Magento\Backend\App\Action;
use SampleEntity\SampleEntityPage\Model\SampleEntity;

class Save extends Action
{
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();

        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create(SampleEntity::class);
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            $model->load($id);
        }

        $model->setData($data);

        try {
            $model->save();
            $this->messageManager->addSuccessMessage(__('You saved this Post.'));
            return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\RuntimeException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the post.'));
        }
    }
}
