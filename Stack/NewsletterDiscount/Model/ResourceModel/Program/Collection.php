<?php


namespace Stack\NewsletterDiscount\Model\ResourceModel\Program;


class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Stack\NewsletterDiscount\Model\Program', 'Stack\NewsletterDiscount\Model\ResourceModel\Program');
    }
}