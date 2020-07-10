<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;
use Models\Common\ChannelKeyReference;
use Models\Common\ChannelKeyReferenceBuilder;
use Models\Common\CustomerGroupKeyReference;
use Models\Common\CustomerGroupKeyReferenceBuilder;
use Models\Common\DiscountedPrice;
use Models\Common\DiscountedPriceBuilder;
use Models\Common\Money;
use Models\Common\MoneyBuilder;
use Models\Customfields\Custom;
use Models\Customfields\CustomBuilder;

/**
 * @implements Builder<PriceDraftImport>
 */
final class PriceDraftImportBuilder implements Builder
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
     * @var null|CustomerGroupKeyReference|CustomerGroupKeyReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var null|ChannelKeyReference|ChannelKeyReferenceBuilder
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
     * @var null|Custom|CustomBuilder
     */
    private $custom;

    /**
     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $discounted;

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>References a customer group by its key.</p>
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>References a channel by its key.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel;
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
     * <p>The custom fields for this category.</p>
     *
     * @return null|Custom
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>Sets a discounted price from an external service.</p>
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        return $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted;
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
    public function withCustomerGroup(?CustomerGroupKeyReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannel(?ChannelKeyReference $channel)
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
    public function withCustom(?Custom $custom)
    {
        $this->custom = $custom;

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
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupKeyReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelKeyReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomBuilder $custom)
    {
        $this->custom = $custom;

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

    public function build(): PriceDraftImport
    {
        return new PriceDraftImportModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->country,
            $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel,
            $this->validFrom,
            $this->validUntil,
            $this->custom instanceof CustomBuilder ? $this->custom->build() : $this->custom,
            $this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted
        );
    }

    public static function of(): PriceDraftImportBuilder
    {
        return new self();
    }
}
