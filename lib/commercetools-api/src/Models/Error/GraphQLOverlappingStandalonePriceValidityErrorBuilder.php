<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReference;
use Commercetools\Api\Models\StandalonePrice\StandalonePriceReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<GraphQLOverlappingStandalonePriceValidityError>
 */
final class GraphQLOverlappingStandalonePriceValidityErrorBuilder implements Builder
{
    /**

     * @var null|StandalonePriceReference|StandalonePriceReferenceBuilder
     */
    private $conflictingStandalonePrice;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $currency;

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

     * @var ?DateTimeImmutable
     */
    private $conflictingValidFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $conflictingValidUntil;

    /**
     * <p>Reference to the conflicting Standalone Price.</p>
     *

     * @return null|StandalonePriceReference
     */
    public function getConflictingStandalonePrice()
    {
        return $this->conflictingStandalonePrice instanceof StandalonePriceReferenceBuilder ? $this->conflictingStandalonePrice->build() : $this->conflictingStandalonePrice;
    }

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the conflicting Standalone Price is associated.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Currency code of the country.</p>
     *

     * @return null|string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p><a href="ctp:api:type:CustomerGroup">CustomerGroup</a> for which the Standalone Price is valid.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Channel</a> for which the Standalone Price is valid.</p>
     *

     * @return null|ChannelResourceIdentifier
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Date and time (UTC) from which the Standalone Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Date and time (UTC) until which the Standalone Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Date and time (UTC) from which the conflicting Standalone Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidFrom()
    {
        return $this->conflictingValidFrom;
    }

    /**
     * <p>Date and time (UTC) until which the conflicting Standalone Price is valid.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getConflictingValidUntil()
    {
        return $this->conflictingValidUntil;
    }

    /**
     * @param ?StandalonePriceReference $conflictingStandalonePrice
     * @return $this
     */
    public function withConflictingStandalonePrice(?StandalonePriceReference $conflictingStandalonePrice)
    {
        $this->conflictingStandalonePrice = $conflictingStandalonePrice;

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
     * @param ?string $currency
     * @return $this
     */
    public function withCurrency(?string $currency)
    {
        $this->currency = $currency;

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
     * @param ?DateTimeImmutable $conflictingValidFrom
     * @return $this
     */
    public function withConflictingValidFrom(?DateTimeImmutable $conflictingValidFrom)
    {
        $this->conflictingValidFrom = $conflictingValidFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $conflictingValidUntil
     * @return $this
     */
    public function withConflictingValidUntil(?DateTimeImmutable $conflictingValidUntil)
    {
        $this->conflictingValidUntil = $conflictingValidUntil;

        return $this;
    }

    /**
     * @deprecated use withConflictingStandalonePrice() instead
     * @return $this
     */
    public function withConflictingStandalonePriceBuilder(?StandalonePriceReferenceBuilder $conflictingStandalonePrice)
    {
        $this->conflictingStandalonePrice = $conflictingStandalonePrice;

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

    public function build(): GraphQLOverlappingStandalonePriceValidityError
    {
        return new GraphQLOverlappingStandalonePriceValidityErrorModel(
            $this->conflictingStandalonePrice instanceof StandalonePriceReferenceBuilder ? $this->conflictingStandalonePrice->build() : $this->conflictingStandalonePrice,
            $this->sku,
            $this->currency,
            $this->country,
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->channel instanceof ChannelResourceIdentifierBuilder ? $this->channel->build() : $this->channel,
            $this->validFrom,
            $this->validUntil,
            $this->conflictingValidFrom,
            $this->conflictingValidUntil
        );
    }

    public static function of(): GraphQLOverlappingStandalonePriceValidityErrorBuilder
    {
        return new self();
    }
}
