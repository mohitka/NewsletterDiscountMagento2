<?php


namespace Stack\NewsletterDiscount\Ui\Component\Listing\Column;


class UseCoupon implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => __('No'), 'value' => '0'],
            ['label' => __('Yes'), 'value' => '1'],
        ];
    }
}