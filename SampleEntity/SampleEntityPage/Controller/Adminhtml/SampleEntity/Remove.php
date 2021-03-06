<?php


namespace SampleEntity\SampleEntityPage\Controller\Adminhtml\SampleEntity;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use SampleEntity\SampleEntityPage\Model\SampleEntity;

class Remove extends Action
{
    public function execute()
    {
        // TODO: Implement execute() method.
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create(SampleEntity::class);
                $model->load($id);
                $model->delete();
//                $this->_eventManager->dispatch(
//                    'adminhtml_sample_entity_on_delete',
//                    [ 'status' => 'success']
//                );
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        return $resultRedirect->setPath('*/*/');
    }
}
