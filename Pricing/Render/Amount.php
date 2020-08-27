<?php

namespace Web4pro\SLogin\Pricing\Render;

use Magento\Framework\Pricing\Amount\AmountInterface;
use Magento\Framework\Pricing\Price\PriceInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Pricing\Render\Amount as MagentoAmount;
use Magento\Framework\Pricing\Render\RendererPool;
use Magento\Framework\Pricing\SaleableInterface;
use Magento\Framework\View\Element\Template;
use Web4pro\SLogin\Helper\Data;

class Amount extends MagentoAmount
{
    public $dataMod;
    public function __construct(Data $dataMod, Template\Context $context, AmountInterface $amount, PriceCurrencyInterface $priceCurrency, RendererPool $rendererPool, SaleableInterface $saleableItem = null, PriceInterface $price = null, array $data = [])
    {
        parent::__construct($context, $amount, $priceCurrency, $rendererPool, $saleableItem, $price, $data);
        $this->dataMod = $dataMod;
    }

    /**
     * @return mixed
     */
    public function isEnableModule()
    {
        return $this->dataMod->getIsEnable();
    }

    /**
     * @return mixed
     */
    public function textHidePrice()
    {
        return $this->dataMod->getHidePrice();
    }
}
