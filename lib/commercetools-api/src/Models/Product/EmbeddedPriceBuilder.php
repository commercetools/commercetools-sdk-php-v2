<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<EmbeddedPrice>
 */
final class EmbeddedPriceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**

     * @var null|ChannelReference|ChannelReferenceBuilder
     */
    private $channel;

    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?PriceTierCollection
     */
    private $tiers;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>Unique identifier of the EmbeddedPrice.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Money value of the EmbeddedPrice.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Country for which the EmbeddedPrice is valid.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>Product distribution <a href="ctp:api:type:Channel">Channel</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|ChannelReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Date from which the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date until the EmbeddedPrice is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Price tiers if any are defined.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

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
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * <p>Custom Fields for the EmbeddedPrice.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?TypedMoney $value
     * @return $this
     */
    public function withValue(?TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?ChannelReference $channel
     * @return $this
     */
    public function withChannel(?ChannelReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $tiers
     * @return $this
     */
    public function withTiers(?PriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withChannel() instead
     * @return $this
     */
    public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @deprecated use withDiscounted() instead
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): EmbeddedPrice
    {
        return new EmbeddedPriceModel(
            $this->id,
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value,
            $this->country,
            $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel,
            $this->validFrom,
            $this->validUntil,
            $this->tiers,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): EmbeddedPriceBuilder
    {
        return new self();
    }
}
