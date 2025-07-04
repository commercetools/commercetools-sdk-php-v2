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
     * <p>User-defined unique identifier for the StandalonePrice. If a <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>) with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>StandalonePrice.sku</code>. This value is not validated to exist in Product Variants.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>StandalonePrice.value</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Maps to <code>StandalonePrice.country</code>. This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Maps to <code>StandalonePrice.customerGroup</code>. If the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CustomerGroup is created.</p>
     * <p>This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *

     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup();

    /**
     * <p>Maps to <code>StandalonePrice.channel</code>. If the referenced <a href="ctp:api:type:Channel">Channel</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Channel is created.</p>
     * <p>This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *

     * @return null|ChannelKeyReference
     */
    public function getChannel();

    /**
     * <p>Maps to <code>StandalonePrice.validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Maps to <code>StandalonePrice.validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Maps to <code>StandalonePrice.tiers</code>.</p>
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
     * <p>Maps to <code>StandalonePrice.custom</code>.</p>
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
