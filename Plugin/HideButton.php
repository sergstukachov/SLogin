<?php


namespace Web4pro\SLogin\Plugin;


use Magento\Catalog\Model\Product;
use Web4pro\SLogin\Helper\Data;

class HideButton
{
    /**
     * @var Data
     */
    public $enableModule;

    public function __construct(Data $enableModule)
    {
        $this->enableModule = $enableModule;
    }

    /**
     * @param Product $product
     * @param $result
     * @return mixed
     */
    public function afterIsSaleable(Product $product, $result)
    {
        if ($this->enableModule->getIsEnable()) {
            return [];
        } else {
            return $result;
        }
    }
}
