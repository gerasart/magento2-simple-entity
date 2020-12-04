<?php


namespace SampleEntity\SampleEntityPage\Controller\Adminhtml\SampleEntity;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use SampleEntity\SampleEntityPage\Model\SampleEntity;

class Duplicate extends Action
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create(SampleEntity::class);
                $newModel = clone $model->load($id); // clone
                $newModel->setId(null); // remove id
                $newModel->isObjectNew(true); // set object as new
                $newModel->getResource()->save($newModel); // save new model (clone)
                $this->_eventManager->dispatch(
                    'adminhtml_sample_entity_on_delete',
                    ['status' => 'success']
                );

                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {

                $this->_eventManager->dispatch(
                    'adminhtml_news_on_delete',
                    ['status' => 'fail']
                );

                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
