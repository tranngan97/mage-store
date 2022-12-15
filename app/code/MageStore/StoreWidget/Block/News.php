<?php
namespace MageStore\StoreWidget\Block;
use MageStore\StoreWidget\Model\BusinessNewsProcessor;

/**
 * Currency rates block
 */
class News extends \Magento\Framework\View\Element\Template
{
    protected $_template = 'MageStore_StoreWidget::widget/news.phtml';
    protected $businessNews;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        BusinessNewsProcessor $businessNews,
        array $data = []
    ) {
        $this->businessNews = $businessNews;
        parent::__construct($context, $data);
    }

    public function getNews()
    {
        return $this->businessNews->getNewsList();
    }
}
