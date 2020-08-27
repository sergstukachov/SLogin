<?php


namespace Web4pro\SLogin\Plugin;


use Magento\Catalog\Model\Product;
use Web4pro\SLogin\Helper\Data;

class HideButton
{
    /**
     * @var Data
     */
    public $isEnableModule;

    public function __construct(Data $isEnableModule)
    {
        $this->isEnableModule = $isEnableModule;
    }

    /**
     * @param Product $subject
     * @param $result
     * @return mixed
     */
    public function afterIsSaleable(Product $subject, $result)
    {
        if ($this->isEnableModule->getIsEnable()) {
            return false;
        } else {
            return $result;
        }
    }
}
