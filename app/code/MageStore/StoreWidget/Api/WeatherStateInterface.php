<?php
/**
 * Product Media Attribute Write Service
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageStore\StoreWidget\Api;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\StateException;

/**
 * Get weather by location.
 * @api
 * @since 100.0.2
 */
interface WeatherStateInterface
{
    /**
     * Create new gallery entry
     *
     * @param string $lat
     * @param string $long
     * @param string $apiKey
     * @return bool
     */
    public function getByLatLong(
        $lat,
        $long,
        $apiKey
    );
}
