<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\StandalonePrices;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\DiscountedPrice;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\PriceTierCollection;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface StandalonePriceImport extends ImportResource
{
    public const FIELD_SKU = 'sku';
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier for the Standalone Price.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Specifies to which ProductVariant the API associates this Price. It is not validated to exist in product variants.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Sets the money value of this Price.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Sets the country for which this Price is valid.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Sets the CustomerGroup for which this Price is valid.</p>
     *

     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>Sets the product distribution Channel for which this Price is valid</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getChannel();

    /**
     * <p>Sets the date from which the Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Sets the date until the Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Sets price tiers.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Sets a discounted price for this Price that is different from the base price with value.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the StandalonePrice.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupKeyReference $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupKeyReference $customerGroup): void;

    /**
     * @param ?ChannelKeyReference $channel
     */
    public function setChannel(?ChannelKeyReference $channel): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?PriceTierCollection $tiers
     */
    public function setTiers(?PriceTierCollection $tiers): void;

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
