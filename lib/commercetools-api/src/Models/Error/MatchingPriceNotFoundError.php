<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MatchingPriceNotFoundError extends ErrorObject
{
    public const FIELD_PRODUCT_ID = 'productId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_CURRENCY = 'currency';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';

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
     * <p><a href="/types#reference">Reference</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $currency
     */
    public function setCurrency(?string $currency): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;

    /**
     * @param ?ChannelReference $channel
     */
    public function setChannel(?ChannelReference $channel): void;
}
