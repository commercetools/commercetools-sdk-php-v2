<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface EmbeddedPriceDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Sets the money value of the EmbeddedPrice.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Sets the country for which the EmbeddedPrice is valid. If not set, the Price is valid for any country.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>Sets the product distribution <a href="ctp:api:type:Channel">Channel</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>Sets a discounted Price from an <strong>external service</strong>. Absolute or relative <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> prices are automatically added to a Product's <a href="#embeddedprice">EmbeddedPrice</a> when created. The DiscountedPrice must reference a ProductDiscount with:</p>
     * <ul>
     * <li>The <code>isActive</code> flag set to <code>true</code>.</li>
     * <li>An <code>external</code> <a href="ctp:api:type:ProductDiscountValueExternal">ProductDiscountValue</a>.</li>
     * <li>A <code>predicate</code> which matches the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the <a href="ctp:api:type:EmbeddedPrice">EmbeddedPrice</a> is referenced from.</li>
     * </ul>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * <p>Sets the date from which the EmbeddedPrice is valid. Must be at least 1 ms before <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Sets the date until the EmbeddedPrice is valid. Must be at least 1 ms after <code>validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Sets Price tiers.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers();

    /**
     * <p>Custom Fields for the EmbeddedPrice.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     */
    public function setCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup): void;

    /**
     * @param ?ChannelResourceIdentifier $channel
     */
    public function setChannel(?ChannelResourceIdentifier $channel): void;

    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;

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
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
