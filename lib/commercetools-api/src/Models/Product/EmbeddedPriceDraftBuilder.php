<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\DiscountedPriceDraftBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<EmbeddedPriceDraft>
 */
final class EmbeddedPriceDraftBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**

     * @var null|ChannelResourceIdentifier|ChannelResourceIdentifierBuilder
     */
    private $channel;

    /**

     * @var null|DiscountedPriceDraft|DiscountedPriceDraftBuilder
     */
    private $discounted;

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

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Sets the money value of the EmbeddedPrice.</p>
     *

     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Sets the country for which the EmbeddedPrice is valid. If not set, the Price is valid for any country.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>Sets the product distribution <a href="ctp:api:type:Channel">Channel</a> for which the EmbeddedPrice is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

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
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * <p>Sets the date from which the EmbeddedPrice is valid. Must be at least 1 ms before <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Sets the date until the EmbeddedPrice is valid. Must be at least 1 ms after <code>validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Sets Price tiers.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * <p>Custom Fields for the EmbeddedPrice.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?Money $value
     * @return $this
     */
    public function withValue(?Money $value)
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
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?ChannelResourceIdentifier $channel
     * @return $this
     */
    public function withChannel(?ChannelResourceIdentifier $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @param ?DiscountedPriceDraft $discounted
     * @return $this
     */
    public function withDiscounted(?DiscountedPriceDraft $discounted)
    {
        $this->discounted = $discounted;

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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withChannel() instead
     * @return $this
     */
    public function withChannelBuilder(?ChannelResourceIdentifierBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @deprecated use withDiscounted() instead
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceDraftBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): EmbeddedPriceDraft
    {
        return new EmbeddedPriceDraftModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->country,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted,
            $this->validFrom,
            $this->validUntil,
            $this->tiers,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): EmbeddedPriceDraftBuilder
    {
        return new self();
    }
}
