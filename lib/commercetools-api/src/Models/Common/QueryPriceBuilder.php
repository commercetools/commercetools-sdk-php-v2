<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<QueryPrice>
 */
final class QueryPriceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var Money|?MoneyBuilder
     */
    private $value;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ChannelReference|?ChannelReferenceBuilder
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
     * @var DiscountedPrice|?DiscountedPriceBuilder
     */
    private $discounted;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var ?PriceTierDraftCollection
     */
    private $tiers;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return null|ChannelReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @return null|PriceTierDraftCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannel(?ChannelReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTiers(?PriceTierDraftCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): QueryPrice
    {
        return new QueryPriceModel(
            $this->id,
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value),
            $this->country,
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->channel instanceof ChannelReferenceBuilder ? $this->channel->build() : $this->channel),
            $this->validFrom,
            $this->validUntil,
            ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->tiers
        );
    }

    public static function of(): QueryPriceBuilder
    {
        return new self();
    }
}
