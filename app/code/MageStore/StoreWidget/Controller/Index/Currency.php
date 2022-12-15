<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageStore\StoreWidget\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Catalog index page controller.
 */
class Currency extends \Magento\Framework\App\Action\Action
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
