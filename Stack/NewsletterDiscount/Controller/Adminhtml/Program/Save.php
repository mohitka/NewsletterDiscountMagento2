<?php


namespace Stack\NewsletterDiscount\Controller\Adminhtml\Program;


class Save extends
    \Stack\NewsletterDiscount\Controller\Adminhtml\AbstractAction
{

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data           = $this->getRequest()->getParam('newsletterdiscount_program');
        $model          = $this->programFactory->create();
        $model->setData($data);
        if ( array_key_exists('program_id', $data) ) {
            $model->setId($data['program_id']);
        }
        try {
            $model->save();
            if ( $model->getId() ) {
                $this->messageManager->addSuccessMessage(__('Program has been successfully saved'));
            }
            if($this->getRequest()->getParam('back')){
                return $resultRedirect->setPath('*/*/edit', array('id' => $model->getId()));
            }
        } catch ( \Exception $e ) {
            $this->messageManager->addErrorMessage($e->getMessage());
            return $resultRedirect->setPath('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
        }
        return $resultRedirect->setPath('*/*/');
    }
}