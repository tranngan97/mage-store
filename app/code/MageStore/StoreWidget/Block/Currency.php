<?php
namespace MageStore\StoreWidget\Block;
use Magento\Framework\View\Element\Template\Context;
use MageStore\StoreWidget\Model\CurrencyConvertProcessorInterface;

/**
 * Currency rates block
 */
class Currency extends \Magento\Framework\View\Element\Template
{
    protected $currencyConvertProcessor;

    protected $_template = 'MageStore_StoreWidget::widget/currency.phtml';

    /**
     * @param Context $context
     * @param CurrencyConvertProcessorInterface $currencyConvertProcessor
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CurrencyConvertProcessorInterface $currencyConvertProcessor,
        array $data = []
    ) {
        $this->currencyConvertProcessor = $currencyConvertProcessor;
        parent::__construct($context, $data);
    }

    public function getCurrencyRates()
    {
        return $this->currencyConvertProcessor->getAllRate();
    }
}
