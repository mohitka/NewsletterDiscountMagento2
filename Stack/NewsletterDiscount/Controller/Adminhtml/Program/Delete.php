<?php


namespace Stack\NewsletterDiscount\Controller\Adminhtml\Program;


class Delete extends
    \Stack\NewsletterDiscount\Controller\Adminhtml\AbstractAction
{
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        if ( $id ) {
            $program = $this->programFactory->create()->load($id);
            if ( $program->getId() ) {
                $program->delete();
                $this->messageManager->addSuccessMessage(__("Program has been deleted successfully"));
            }else{
                $this->messageManager->addErrorMessage(__("Program doesn't exist"));
            }
        }
        return $this->_redirect('*/*');
    }

}