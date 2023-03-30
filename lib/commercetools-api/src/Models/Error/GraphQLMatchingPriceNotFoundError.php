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

interface GraphQLMatchingPriceNotFoundError extends GraphQLErrorObject
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
    public function getCode();

    /**
     * <p>Unique identifier of a <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getProductId();

    /**
     * <p>Unique identifier of a <a href="ctp:api:type:ProductVariant">ProductVariant</a> in the Product.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Currency code of the country.</p>
     *

     * @return null|string
     */
    public function getCurrency();

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Customer Group associated with the Price.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Channel associated with the Price.</p>
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
