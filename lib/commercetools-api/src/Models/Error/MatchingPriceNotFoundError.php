<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;

interface MatchingPriceNotFoundError extends ErrorObject
{
    
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_CURRENCY = 'currency';
    const FIELD_COUNTRY = 'country';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CHANNEL = 'channel';

    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return string|null
     */
    public function getCurrency();
    
    /**
     *
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getChannel();
    public function setProductId(?string $productId): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setCurrency(?string $currency): void;
    
    public function setCountry(?string $country): void;
    
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
    
    public function setChannel(?ChannelReference $channel): void;
}