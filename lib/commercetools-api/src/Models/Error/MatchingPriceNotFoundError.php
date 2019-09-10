<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

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
     * @return null|string
     */
    public function getProductId();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getCurrency();

    /**
     * @return null|string
     */
    public function getCountry();

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * @return null|ChannelReference
     */
    public function getChannel();

    public function setProductId(?string $productId): void;

    public function setVariantId(?int $variantId): void;

    public function setCurrency(?string $currency): void;

    public function setCountry(?string $country): void;

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    public function setChannel(?ChannelReference $channel): void;
}
