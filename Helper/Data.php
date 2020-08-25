<?php
namespace Web4pro\SLogin\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getIsEnable(){
        return $this->scopeConfig->getValue('slogin/general/enabled',
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getHidePrice(){
        return $this->scopeConfig->getValue('slogin/general/hide_price',
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
