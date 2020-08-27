<?php

namespace Web4pro\SLogin\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const IS_ENABLE = 'slogin/general/enable';
    const HIDE_PRICE = 'slogin/general/hide_price';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    )
    {
        parent::__construct($context);
    }

    public function getIsEnable()
    {
        return $this->scopeConfig->getValue(
            self::IS_ENABLE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getHidePrice()
    {
        return $this->scopeConfig->getValue(
            self::HIDE_PRICE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
