<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface PriceDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_CUSTOMER_GROUP = 'customerGroup';
    public const FIELD_CHANNEL = 'channel';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_TIERS = 'tiers';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined identifier for the Price. It must be unique per <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Money value of this Price.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Set this field if this Price is only valid for the specified country.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>Set this field if this Price is only valid for the referenced <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup();

    /**
     * <p>Set this field if this Price is only valid for the referenced <code>ProductDistribution</code> <a href="ctp:api:type:Channel">Channel</a>.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel();

    /**
     * <p>Set this field if this Price is only valid from the specified date and time. Must be at least 1 ms earlier than <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Set this field if this Price is only valid until the specified date and time. Must be at least 1 ms later than <code>validFrom</code>. Prices that are no longer valid are not automatically removed, but they can be <a href="ctp:api:type:ProductRemovePriceAction">removed</a> if necessary.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Set this field to add a DiscountedPrice from an <strong>external service</strong>.</p>
     * <p>Otherwise, Composable Commerce sets this field automatically if at least one <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> applies.
     * The DiscountedPrice must reference a ProductDiscount with:</p>
     * <ul>
     * <li>The <code>isActive</code> flag set to <code>true</code>.</li>
     * <li>A <a href="ctp:api:type:ProductDiscountValueExternal">ProductDiscountValue</a> of type <code>external</code>.</li>
     * <li>A <code>predicate</code> that matches the <a href="ctp:api:type:ProductVariant">ProductVariant</a> the Price is referenced from.</li>
     * </ul>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * <p>Set this field to specify different Prices for certain <a href="ctp:api:type:LineItem">LineItem</a> quantities.</p>
     *

     * @return null|PriceTierDraftCollection
     */
    public function getTiers();

    /**
     * <p>Custom Fields for the Price.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;

    /**
     * @param ?PriceTierDraftCollection $tiers
     */
    public function setTiers(?PriceTierDraftCollection $tiers): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
