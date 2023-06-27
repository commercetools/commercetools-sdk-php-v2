<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Api\Models\Common\DiscountedPriceDraftBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceTierDraftCollection;
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
 * @implements Builder<StandalonePriceDraft>
 */
final class StandalonePriceDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

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

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**

     * @var ?PriceTierDraftCollection
     */
    private $tiers;

    /**

     * @var null|DiscountedPriceDraft|DiscountedPriceDraftBuilder
     */
    private $discounted;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**

     * @var ?bool
     */
    private $active;

    /**
     * <p>User-defined unique identifier for the StandalonePrice.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Specifies to which <a href="ctp:api:type:ProductVariant">ProductVariant</a> the API associates this Price.
     * It is not validated to exist in product variants.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Sets the money value of this Price.</p>
     *

     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Sets the country for which this Price is valid.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which this Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>Sets the product distribution <a href="ctp:api:type:Channel">Channel</a> for which this Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Sets the date from which the Price is valid. Must be at least 1 ms earlier than <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Sets the date until the Price is valid. Must be at least 1 ms later than <code>validFrom</code>. Standalone Prices that are no longer valid are not automatically deleted, but they can be <a href="/../api/projects/standalone-prices#delete-standaloneprice">deleted</a> if necessary.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Sets price tiers.</p>
     *

     * @return null|PriceTierDraftCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * <p>Sets a discounted price for this Price that is different from the base price with <code>value</code>.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * <p>Custom Fields for the StandalonePrice.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Set to <code>false</code>, if the StandalonePrice should not be considered during <a href="ctp:api:type:ProductPriceSelection">price selection</a>.</p>
     *

     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
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
     * @param ?PriceTierDraftCollection $tiers
     * @return $this
     */
    public function withTiers(?PriceTierDraftCollection $tiers)
    {
        $this->tiers = $tiers;

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
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

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

    public function build(): StandalonePriceDraft
    {
        return new StandalonePriceDraftModel(
            $this->key,
            $this->sku,
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->country,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->validFrom,
            $this->validUntil,
            $this->tiers,
            $this->discounted instanceof DiscountedPriceDraftBuilder ? $this->discounted->build() : $this->discounted,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->active
        );
    }

    public static function of(): StandalonePriceDraftBuilder
    {
        return new self();
    }
}
