<?php
namespace AHT\Hello\Block;


class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getHelloInfo()
    {
        return __('Module Hello');
    }
}
