<?php
/**
 * Product Media Attribute Write Service
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MageStore\StoreWidget\Model;

/**
 * Get weather by location.
 */
class WeatherStateProcessor implements \MageStore\StoreWidget\Api\WeatherStateInterface
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
    ) {
        return true;
    }
}
