<?php

namespace SampleEntity\SampleEntityPage\Controller\Adminhtml\SampleEntity {

    use Magento\Backend\App\Action;
    use Magento\Backend\App\Action\Context;
    use Magento\Framework\View\Result\PageFactory;
    use SampleEntity\SampleEntityPage\Model\SampleEntity;

    class Edit extends Action
    {
        const ADMIN_RESOURCE = 'Index';
        /**
         * @var PageFactory
         */
        protected PageFactory $resultPageFactory;

        public function __construct(
            Context $context,
            PageFactory $resultPageFactory
        ) {
            $this->resultPageFactory = $resultPageFactory;
            parent::__construct($context);
        }

        public function execute()
        {
            $id = $this->getRequest()->getParam('id');
//            $model = $this->_objectManager->create(SampleEntity::class);
//            if ($id) {
//                $model->load($id);
//            }

//            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

            $resultPage = $this->resultPageFactory->create();
            $resultPage->getConfig()->getTitle()->prepend(__('Sample Entity Edit '.$id));

            return $resultPage;
        }
    }
}
