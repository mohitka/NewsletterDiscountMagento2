<?php


namespace Stack\NewsletterDiscount\Model\ResourceModel;


class Program extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('newsletterdiscount_program','program_id');
    }
}