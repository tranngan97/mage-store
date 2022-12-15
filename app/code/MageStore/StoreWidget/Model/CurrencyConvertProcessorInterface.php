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
class CurrencyConvertProcessorInterface implements \MageStore\StoreWidget\Api\CurrencyConverterInterface
{
    public function getAllRate()
    {
        $ctx = stream_context_create(['ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]]);
        $xmlContent = file_get_contents(
            'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=68',
            false,
            $ctx
        );
        $content = json_encode(simplexml_load_string($xmlContent));
        $xmlArray = json_decode($content, true);
        $currencyDataArray = [];
        foreach ($xmlArray['Exrate'] as $currencyData) {
            foreach ($currencyData as $data) {
                $currencyDataArray[$data['CurrencyCode']] = [
                    'name' => trim($data['CurrencyName']),
                    'buy' => $data['Buy'],
                    'transfer' => $data['Transfer'],
                    'sell' => $data['Sell'],
                ];
            }
        }
        return $currencyDataArray;
    }
}
