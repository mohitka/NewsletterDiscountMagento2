<?php


namespace Stack\NewsletterDiscount\Model;


class Program extends
    \Magento\Framework\Model\AbstractModel
{
    const SUBTOTAL   = 'subtotal';
    const GRANDTOTAL = 'grandtotal';
    const FIXED      = 'fixed';
    const PERCENT    = 'percent';
    protected $_eventObject = 'newsletterdiscount_program';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Stack\NewsletterDiscount\Model\ResourceModel\Program');
    }

}