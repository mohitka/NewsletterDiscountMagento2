<?php


namespace Stack\NewsletterDiscount\Ui\Component\Listing\Column;


class DiscountType implements
    \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('Fixed'), 'value' => \Stack\NewsletterDiscount\Model\Program::FIXED],
            ['label' => __('Percentage'), 'value' => \Stack\NewsletterDiscount\Model\Program::PERCENT],
        ];
    }
}