<?php

namespace Stack\NewsletterDiscount\Controller;

abstract class AbstractAction extends
    \Magento\Framework\App\Action\Action
{
    /**
     * @var \Stack\NewsletterDiscount\Model\ProgramFactory
     */
    protected $programFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Stack\NewsletterDiscount\Model\ProgramFactory $programFactory
    ) {
        parent::__construct($context);
        $this->programFactory = $programFactory;
    }
}