<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface EmbeddedPrice extends JsonObject
{
    public const FIELD_ID = 'id';
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
     * <p>Unique identifier of the EmbeddedPrice.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Money value of the EmbeddedPrice.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Country for which the EmbeddedPrice is valid.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup();

    /**
     * <p>Product distribution <a href="ctp:api:type:Channel">Channel</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|ChannelReference
     */
    public function getChannel();

    /**
     * <p>Date from which the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date until the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Price tiers if any are defined.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Set if a matching <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> exists.
     * If set, the API uses the <code>discounted</code> value for the <a href="ctp:api:type:CartLineItemPriceSelection">LineItem Price selection</a>.
     * When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Discount</a> is applied and the fraction part of the <code>discounted</code> price is 0.5,
     * the discounted Price is rounded in favor of the customer with the <a href="https://en.wikipedia.org/wiki/Rounding#Round_half_down">half down rounding</a>.</p>
     * <p>The service will unset or replace the value</p>
     * <ul>
     * <li>once a matching relative or absolute Product Discount with a higher <code>sortOrder</code> exists,</li>
     * <li>if the referenced external Product Discount is deactivated, or</li>
     * <li>if the Product changes and the external Product Discount predicate does not match the discounted Price any more.</li>
     * </ul>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Custom Fields for the EmbeddedPrice.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
