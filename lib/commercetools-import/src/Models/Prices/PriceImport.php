<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use DateTimeImmutable;

interface PriceImport extends ImportResource
{

    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     * <p>The Import API <strong>only</strong> supports <code>centPrecision</code> prices.</p>
     *
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Maps to <code>Price.county</code>.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Maps to <code>Price.validFrom</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Maps to <code>Price.validUntil</code>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>References a channel by its key.</p>
     * <p>The channel referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel();

    /**
     * <p>The product variant in which this price is contained.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>The product in which this product variant containong the price is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct();

    public function setValue(?Money $value): void;

    public function setCountry(?string $country): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    public function setChannel(?ChannelKeyReference $channel): void;

    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    public function setProduct(?ProductKeyReference $product): void;
}
