<?php


namespace Stack\NewsletterDiscount\Ui\Component\Listing\Column;


class DiscountOn implements
    \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('Subtotal'), 'value' => \Stack\NewsletterDiscount\Model\Program::SUBTOTAL],
            ['label' => __('Grand Total'), 'value' => \Stack\NewsletterDiscount\Model\Program::GRANDTOTAL],
//            ['label' => __('Fixed'), 'value' => \Stack\NewsletterDiscount\Model\Program::FIXED],
        ];
    }
}